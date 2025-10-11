<?php

abstract class Category{

    abstract public function getMyCategory();
}
    class News extends Category{

        public function getMyCategory()
        {
            return "News \n";
        }
    }

    class Sport extends Category{

        public function getMyCategory()
        {
            return "Sport \n";
        }
    }

    class Gossip extends Category{

        public function getMyCategory()
        {
            return "Gossip \n";
        }
    }

    class History extends Category{

        public function getMyCategory()
        {
            return "Storia \n";
        }
    }
    $storia = new History();
    echo $storia->getMyCategory();



