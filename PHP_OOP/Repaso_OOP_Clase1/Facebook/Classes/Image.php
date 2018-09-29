<?php

class Image extends Content
{
    private $photo;

    public function __construct(String $descripcion, User $user, String $photo)
    {
        parent::__construct($descripcion, $user);
        $this->photo = $photo;
    }

    public function getPhoto()
    {
        return $this->photo;
    }
    
    public function setPhoto($photo)
    {
        $this->photo = $photo;
    }
}