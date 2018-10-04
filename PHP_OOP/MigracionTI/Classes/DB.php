<?php

abstract class DB
{
    abstract public function dbConnect();
    abstract public function emailDbSearch($email);
    abstract public function saveUser(User $user);

    public function saveAvatar($file)
    {

    }
}