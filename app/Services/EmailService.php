<?php

namespace App\Services;

use App\Interface\MassageSender;

class EmailService implements MassageSender
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }
    public function send($sender, $msg){
        echo "Email sent to $sender : $msg";
        return true;
    }
}
