<?php

class User
{
    private $id;
    private $username;
    private $friends = [];
    private $avatar;
    private $timeline;

    public function __construct(Int $id, String $username, String $avatar, Timeline $timeline = null)
    {
        $this->id = $id;
        $this->username = $username;
        $this->avatar = $avatar;
        $this->timeline = $timeline;
    }
    
    public function getId()
    {
        return $this->id;
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    public function getFriends()
    {
        return $this->friends;
    }

 
    public function setFriends(User $friend)
    {
        $this->friends[] = $friend;
    }

    public function getAvatar()
    {
        return $this->avatar;
    }

    public function setAvatar($avatar)
    {
        $this->avatar = $avatar;
    }

    /**
     * Get the value of timeline
     */ 
    public function getTimeline()
    {
        return $this->timeline;
    }

    /**
     * Set the value of timeline
     *
     * @return  self
     */ 
    public function setTimeline($timeline)
    {
        $this->timeline = $timeline;

        return $this;
    }
}

