<?php

namespace Geekbrains\LevelTwo\Blog;

use Geekbrains\LevelTwo\Person\Person;

class Post
{
    private int $id;
    private Person $user;
    private string $title;
    private string $text;

    public function __construct(int $id, Person $user, string $title, string $text)
    {
        $this->id = $id;
        $this->user = $user;
        $this->title = $title;
        $this->text = $text;
    }

    public function __toString()
    {
        return $this->user . ' ' . $this->title . ' ' . ' пишет: ' . $this->text;
    }
}