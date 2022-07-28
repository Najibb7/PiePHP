<?php
namespace Controller;

class UserController extends \Core\Controller{

public function registerAction() 
{
    $this->render('register');
}

public function inscriptionAction()
{
    $this->render('inscription');
}
}