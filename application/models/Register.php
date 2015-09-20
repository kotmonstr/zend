<?php

class Application_Model_Register
{
    public function createUser($array)
    {
    $dbTableUser = new Application_Model_DbTable_User();
    $dbTableUser->insert($array);

    }
    public function updateUser($array,$id)
    {
    $dbTableUser = new Application_Model_DbTable_User();
    $dbTableUser->update($array,"id=$id");

    }
    public function fetchAll()
    {
        $dbTableUser = new Application_Model_DbTable_User();
        $all = $dbTableUser->fetchAll();
        $all = $dbTableUser->fetchAll();

        return $all;
    }

}

