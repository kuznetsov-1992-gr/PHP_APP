<?php

namespace Geekbrains\LevelTwo\Blog;

class Comment
{
    private int $id;
    private User $user;
    private Post $post;
    private string $text;

    public function __construct(int $id, User $user, Post $post, string $text)
    {
        $this->id = $id;
        $this->user = $user;
        $this->post = $post;
        $this->text = $text;
    }

    public function __toString() :string
    {
        return ($this->post . PHP_EOL
            . 'Комент к посту от: '
            . $this->user . PHP_EOL
            . $this->text);

    }
}