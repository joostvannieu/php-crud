<?php
declare(strict_types=1);

class User
{
    private $id;
    private $name;
    private $email;

    public function __construct(int $id, string $name, string $email)
    {
        $this->id= $id;
        $this->name = $name;
        $this->email = $email;
    }


    public function getId(): int
    {
        return $this->id;
    }

    public function getName() : string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }


}