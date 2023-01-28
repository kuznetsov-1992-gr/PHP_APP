<?php

namespace Geekbrains\LevelTwo\Blog\Repositories;

use Geekbrains\LevelTwo\Blog\Exceptions\UserNotFoundException;
use Geekbrains\LevelTwo\Blog\User;

class InMemoryUsersRepository
{
    private array $users = [];

    public function save(User $user) :void
    {
        $this->users[] = $user;
    }

    public function get(int $id) : User
    {
        foreach ($this->users as $user) {
            if ($user->id() === $id) {
                return $user;
            }
        }
        throw new UserNotFoundException("User not found: $id");
    }
}