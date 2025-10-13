<?php

require_once('class.php');

class Post{
    private $title;

    private $category;

    private $tag;

    public function __construct($title, Category $categoria, $tag)
    {
        $this->title = $title;

        $this->category = $categoria;

        $this->tag = $tag;
    }

    public function getTitle(){

        return $this->title;
    }

    public function getCategory(){

        return $this->category->getMyCategory();

    }

    public function getTag(){

        return $this->tag;
    }
}

$post = new post("Titolo", new News(), "tag 1");

$post1 = new post("Titolo 2", new Gossip(), "tag 2");

echo $post->getCategory();

echo $post1->getTitle();







