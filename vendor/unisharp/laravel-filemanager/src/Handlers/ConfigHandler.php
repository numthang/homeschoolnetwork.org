<?php

namespace UniSharp\LaravelFilemanager\Handlers;
use Auth;
class ConfigHandler
{
    public function userField()
    {
        #return auth()->user()->id;
        return Auth::getUser()->id;
    }
}
