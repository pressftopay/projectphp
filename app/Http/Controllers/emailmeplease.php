<?php

namespace App\Http\Controllers;

use App\Mail\EmailmePlease as MailEmailmePlease;
use Illuminate\Http\Request;
use Mail;
class emailmeplease extends Controller
{
    public function send(){
        $objDemo = new \stdClass();
       
        $objDemo->sender = 'Zhassulan.Yessenov';
        $objDemo->receiver = 'Zhassulan.Yessenov';

       Mail::to("190103172@stu.sdu.edu.kz")->send(new MailEmailmePlease($objDemo));
       return redirect('/mainpage');
}
}