<?php //namespace App\Http\Controllers;
namespace App\Http\Controllers;
use App\Mailers\Mailer;

class UsersController extends BaseController {

protected $mailer;

public  function__contruct(Mailer $mailer)
{
    $this->mailer = $mailer;
}

public function store()
{
    $user= [];
    $this->mailer->sendTo($user);
    //$this->mailer->welcome()->sendTo($user);
}

}