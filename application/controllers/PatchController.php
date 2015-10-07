<?php

class PatchController extends Zend_Controller_Action
{

    public function init()
    {
        // Define some CLI options
        $getopt = new Zend_Console_Getopt(array(
            'withdata|w' => 'Load database with sample data',
            'env|e-s'    => 'Application environment for which to create database (defaults to development)',
            'help|h'     => 'Help -- usage message',
        ));
        try {
            $getopt->parse();
        } catch (Zend_Console_Getopt_Exception $e) {
            // Bad options passed: report usage
            echo $e->getUsageMessage();
            return false;
        }
        // Initialize Zend_Application
        $application = new Zend_Application(
            APPLICATION_ENV,
            APPLICATION_PATH . '/configs/application.ini'
        );

        // Initialize and retrieve DB resource
        $bootstrap = $application->getBootstrap();
        $bootstrap->bootstrap('db');
        $dbAdapter = $bootstrap->getResource('db');
        // let the user know whats going on (we are actually creating a
// database here)
        if ('testing' != APPLICATION_ENV) {
            echo 'Writing Database Guestbook in (control-c to cancel): ' . PHP_EOL;
            for ($x = 5; $x > 0; $x--) {
                echo $x . "\r"; sleep(1);
            }
        }

vd(1);
    }

    public function indexAction()
    {


    }



}



