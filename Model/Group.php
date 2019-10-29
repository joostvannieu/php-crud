<?php


class Group
{
    private $name;
    private $location;

    public function __construct(string $name, string $location)
    {
        $this->name = $name;
        $this->location = $location;
    }


    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getLocation(): string
    {
        return $this->location;
    }

    public function setLocation(string $location): void
    {
        $this->location = $location;
    }



}