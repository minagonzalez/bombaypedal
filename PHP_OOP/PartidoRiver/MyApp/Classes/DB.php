<?php

abstract class DB
{
    abstract public function dbConnect($array);
    abstract public function dbEmailSearch($email);
    abstract public function saveUser($user);
    
}