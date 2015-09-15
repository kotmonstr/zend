<?php

class TestController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        $this->view->assign('a', 'содержимое');
    }

    public function createAction()
    {
        $register = new Application_Model_Register();
        $register->createUser(array('username' => 'usertest',
                                    'email' => 'test'));
        $this->view->assign('result', 'create-ok');
    }


}

