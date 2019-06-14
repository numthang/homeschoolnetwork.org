<?php

namespace Renatio\FormBuilder\Listeners;

use Renatio\FormBuilder\Models\FormLog;

/**
 * Class EmailSend
 * @package Renatio\FormBuilder\Listeners
 */
class EmailSend
{

    /**
     * @var FormLog
     */
    private $logger;

    /**
     * @param FormLog $logger
     */
    public function __construct(FormLog $logger)
    {
        $this->logger = $logger;
    }

    /**
     * @param $mailer
     * @param $view
     * @param $message
     */
    public function handle($mailer, $view, $message)
    {
        $headers = $message->getHeaders();

        $pluginHeader = $headers->get('X-OC-PLUGIN');
        $logHeader = $headers->get('X-OC-LOG');

        if (is_object($logHeader)) {
            $log = $this->logger->find($logHeader->getValue());
        }

        if (is_object($pluginHeader) && is_object($log) && $pluginHeader->getValue() == 'FormBuilder') {
            $log->content_html = $message->getBody();
            $log->save();
        }
    }

}
