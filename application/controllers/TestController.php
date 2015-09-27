<?php

class TestController extends Zend_Controller_Action
{

    public function init()
    {
        $this->db = Zend_Db_Table::getDefaultAdapter();
        $this->view->title = 'Test';
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

    public function updateAction()
    {
        $register = new Application_Model_Register();
        $register->updateUser(array('username' => 'usertest-new-new',
                                    'email' => 'test-new'),43);
        $this->view->assign('result', 'update-ok');
    }

    public function getAction()
    {

        $register = new Application_Model_Register();

         $select = $register->getUser();
        vd($select);

    }

    public function userAction()
    {

        $user = $this->db->query('SELECT * FROM USER ORDER BY id DESC ')->fetchAll();
        $this->view->user = $user;

    }

    public function useraddAction()
    {



    }

    public function addAction()
    {
        $data=array();
        $data['email']= $this->_getParam('email',0);
        $data['username']= $this->_getParam('username',0);
        $this->db->insert('user',$data);
        $this->redirect('/test/user');
    }


}



