<?php


class GroupController
{
    public function render()
    {

        $connect= new Connection();
        $allGroups = $connect->getAllFromTable('group');
        $groups = [];
        foreach ($allGroups as $row){
            $group = new Group($row['id'],$row['name'],$row['location']);
            $groups[]= $group;
        }
        require 'View/grouppage.php';
    }
}
