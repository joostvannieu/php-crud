<?php


class Student extends User
{
    private $group;


    public function __construct(string $name, string $email, int $group)
    {
        parent::__construct($name, $email);
        $this->group = $group;
    }


    public function getGroup():int
    {
        return $this->group;
    }


}