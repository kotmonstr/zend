<?php

class TestController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        $this->view->assign('a','����������');
    }

    public function otherAction()
    {
        echo 22;
    }


}

