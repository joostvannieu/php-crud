<?php


class Appointment
{
    private $teacher;
    private $group;


    public function __construct(Teacher $teacher, Group $group)
    {
        $this->teacher = $teacher;
        $this->group = $group;
    }


    public function getTeacher(): Teacher
    {
        return $this->teacher;
    }

    public function setTeacher(Teacher $teacher): void
    {
        $this->teacher = $teacher;
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