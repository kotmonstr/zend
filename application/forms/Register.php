<?php

class Application_Form_Register extends Zend_Form
{


    public function init()
    {

        $this->setMethod('post');
        $this->setAttrib('action', 'save');
        $this->addElement('text', 'email', ['label' => 'Email',
            'class'      => 'email-input',
            'required'   => true,
            'filter'     => ['StringTrim'],
            'validators' => ['EmailAddress']
        ]);
        $this->addElement('text', 'login', ['label' => 'Login', 'class' => 'email-input']);
        $this->addElement('password', 'password', ['label' => 'Password', 'class' => 'email-input']);
        $this->addElement('submit', 'save', ['class' => 'email-input']);
    }


}

