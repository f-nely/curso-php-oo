<?php

namespace App\Classes;

class Post
{
    private string $title;
    private string $content;
    private Category $category;

    public function setTitle(string $title): void
    {
        $this->title = $title;   
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setContent(string $content): void
    {
        $this->content = $content;   
    }

    public function getContent(): string
    {
        return $this->content;
    }

    public function setCategory(Category $category): void
    {
        $this->category = $category;
    }

    public function getCategory()
    {
        return $this->category->getName();
    }
}