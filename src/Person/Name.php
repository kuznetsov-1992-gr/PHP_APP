<?php

namespace Geekbrains\LevelTwo\Person ;

class Name
{
    private string $firstName;
    private string $lastName;

    public function __construct(string $firstName, string $lastName)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    public function __toString() :string
    {
        return $this->firstName . " "  .  $this->lastName;
    }
    public function firstName() :string
    {
        return $this->firstName;
    }
}