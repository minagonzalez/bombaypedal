<?php

class Text extends Content
{
    private $post;

    public function __construct(String $descripcion, User $user, String $post)
    {
        parent::__construct($descripcion, $user);
        $this->post = $post;
    }

    public function getPost()
    {
        return $this->post;
    }

    public function setPost($post)
    {
        $this->post = $post;
    }
}