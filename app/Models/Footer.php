<?php

namespace App\Models;

class Footer
{
    protected $content;

    public function __construct($content = '')
    {
        $this->content = $content;
    }

    public function setContent($content)
    {
        $this->content = $content;
    }

    public function getContent()
    {
        return $this->content;
    }

    public function render()
    {
        return "<footer>{$this->content}</footer>";
    }
}
