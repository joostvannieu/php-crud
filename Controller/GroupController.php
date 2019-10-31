<?php


class GroupController
{
    public function render()
    {
        require 'View/grouppage.php';
        $connect= new Connection();
        $group = $connect->getAllFromTable('group');

        return $group;
    }

}
