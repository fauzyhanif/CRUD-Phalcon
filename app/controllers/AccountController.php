<?php

class AccountController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {

    }

    public function loginAction()
    {
    	return $this->response->redirect('account/index');
    	// $this->view->pick("account/index");
    }

}

