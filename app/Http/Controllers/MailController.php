<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class MailController extends Controller
{

    public function send()
    {

        //'text' => 'mail' имя файла с текстом для сообщения
        // массив данных в отправлении, имя здесь

        Mail::send(['text' => 'mail'], ['name', 'Web Taldan'], function($message)
        {
            //кому и тема
            $message->to('ogniemimechem@gmail.com', 'To Taldan') ->subject('Test email');

            $message->from('food55@template-order.ru', 'From Taldan');


        });


    }


}
