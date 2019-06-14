<?php

namespace Renatio\FormBuilder\Listeners;

use Event;
use Illuminate\Mail\Mailer;
use Renatio\FormBuilder\Models\Form;
use Renatio\FormBuilder\Models\FormLog;

/**
 * Class FormEmail
 * @package Renatio\FormBuilder\Listeners
 */
class FormEmail
{

    /**
     * @var Mailer
     */
    private $mailer;

    /**
     * @var FormLog
     */
    private $logger;

    /**
     * @param Mailer $mailer
     * @param FormLog $logger
     */
    public function __construct(Mailer $mailer, FormLog $logger)
    {
        $this->mailer = $mailer;
        $this->logger = $logger;
    }

    /**
     * @param Form $form
     * @return mixed
     */
    public function handle(Form $form)
    {
        $data = $form->getPostData();

        $this->logger->log($form);

        $response = Event::fire('formBuilder.beforeSendMessage', [$form, $data, $this->logger->files]);

        $result = array_shift($response);

        if (empty($result)) {
            return $this->sendEmail($form, $data);
        }

        return $result;
    }

    /**
     * @param $message
     */
    private function attachFiles($message)
    {
        foreach ($this->logger->files as $file) {
            $message->attach($file->getLocalPath());
        }
    }

    /**
     * @param Form $form
     * @param array $data
     * @return mixed
     */
    private function sendEmail(Form $form, array $data)
    {
        return $this->mailer->send($form->template->code, $data, function ($message) use ($form, $data) {

            $message->to($form->to_email, $form->to_name);

            $this->setMessageOptions($message, $form);

            $this->setReplyTo($message, $form, $data);

            $message->getHeaders()->addTextHeader('X-OC-PLUGIN', 'FormBuilder');
            $message->getHeaders()->addTextHeader('X-OC-LOG', $this->logger->id);

            $this->autoresponse($message, $form);

            $this->attachFiles($message);
        });
    }

    /**
     * @param $message
     * @param $form
     */
    private function setMessageOptions($message, $form)
    {
        $options = [
            'from' => ['from_email', 'from_name'],
            'bcc' => ['bcc_email', 'bcc_name'],
        ];

        foreach ($options as $key => $option) {
            if ( ! empty($form->{$option[0]})) {
                $message->{$key}($form->{$option[0]}, $form->{$option[1]});
            }
        }
    }

    /**
     * @param $message
     * @param $form
     * @param $data
     */
    protected function setReplyTo($message, $form, $data)
    {
        $email = $data[optional($form->reply_email_field)->name] ?? null;
        $name = $data[optional($form->reply_name_field)->name] ?? null;

        if ($email) {
            $message->replyTo($email, $name);
        } else if ($form->reply_email) {
            $message->replyTo($form->reply_email, $form->reply_name);
        }
    }

    /**
     * @param $message
     * @param $form
     */
    private function autoresponse($message, $form)
    {
        $email = post($form->response_email_field);

        if ( ! empty($form->response_email_field) && $email) {
            $message->bcc($email);
        }
    }

}
