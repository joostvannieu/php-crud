<?php


class Student extends User
{
    private $group;

    public function __construct(string $name, string $email, Group $group)
    {
        parent::__construct($name, $email);
        $this->group = $group;
    }

    public function getGroup(): Group
    {
        return $this->group;
    }

    public function setGroup(Group $group): void
    {
        $this->group = $group;
    }
}