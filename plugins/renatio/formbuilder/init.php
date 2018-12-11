<?php

use Renatio\FormBuilder\Listeners\EmailSend;
use Renatio\FormBuilder\Listeners\FormEmail;

Event::listen('formBuilder.sendMessage', FormEmail::class);
Event::listen('mailer.send', EmailSend::class);