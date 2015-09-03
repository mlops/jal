<?php
namespace App\Mailers;

class UserMailer extends Mailer {

    public function welcome(User $user)
    {

        $view = 'emails.welcome';
        $data = [];
        $subject = 'Welcome to Laracast';

        return $this->sendTo($user, $subject, $view, $data);
    }


}
 