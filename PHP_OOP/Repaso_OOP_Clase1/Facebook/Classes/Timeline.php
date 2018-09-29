<?php

class Timeline 
{
    private $content;

    public function __construct(Array $content = [])
    {
        $this->content = $content;
    }

    public function getContent()
    {
        return $this->content;
    }

    public function setContent(Content $content)
    {
        $this->content[] = $content;
    }

}