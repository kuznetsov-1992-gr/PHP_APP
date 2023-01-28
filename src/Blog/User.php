<?php
namespace Geekbrains\LevelTwo\Blog;
use Geekbrains\LevelTwo\Person\Name;

class User
{
    private int $id;
    private Name $username;
    private string $login;

    public function __construct(int $id, Name $username, string $login)
    {
        $this->id = $id;
        $this->username = $username;
        $this->login = $login;
    }

    /**
     * @return int
     */
    public function Id(): int
    {
        return $this->id;
    }

    /**
     * @return Name
     */
    public function Username(): Name
    {
        return $this->username;
    }

    /**
     * @return string
     */
    public function Login(): string
    {
        return $this->login;
    }

    /**
     * @param int $id
     * @param string $username
     * @param string $login
     */


    public function __toString(): string
    {
        return "Юзер $this->id с именем $this->username и логином $this->login. " . PHP_EOL;
    }

}