<?php

class User
{
    private $first_name;
    private $last_name;

    public function __construct($first_name, $last_name)
    {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
    }

    public function getFirstName(): string {
        return $this->first_name;
    }

    public function getLastName(): string {
        return $this->last_name;
    }

    public function fullName(): string
    {
        return "{$this->first_name} {$this->last_name}";
    }
}