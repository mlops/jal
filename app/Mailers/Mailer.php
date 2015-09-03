<?php namespace App\Mailers;

abstract class Mailer {
    public function sendto($user, $subject, $view, $data =[])
    {
        Mail::send($view, $data, function($message) use($user, $subject)
        {
            $message->to($user->email)
                    ->subject($subject);

        });
    }

}