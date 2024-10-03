<?php

namespace App\Services;

use App\Interface\MassageSender;

class SMSService implements MassageSender
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }
    public function send($sender, $msg){
        echo "<br> SMS sent to $sender : $msg";
        return true;
    }
}
