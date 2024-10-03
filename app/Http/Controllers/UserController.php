<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Interface\MassageSender;

class UserController extends Controller
{
    // public $email;
    // public function __construct(MassageSender $email){
    //     $this->email= $email;
    // }
    public function index(){
        // $this->email->send("Fardin","Practicing About Design Pattern");

        $email= app(MassageSender::class)->get('email');
        $sms= app(MassageSender::class)->get('sms');
        $email->send("Fardin@gmail.com","Practicing About Design Pattern");
        $sms->send("Fardin khan","Practicing About Design Pattern and it a s short massage service");
        // return true;
    }
}