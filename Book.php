<?php
class Book{
    public string $title;
    public float $price;
    public ?Author $author;
    public function getTitle(): string{
        return $this->title;
    }   
    public function setTitle($title){
        $this->title=$title;
    }
    public function getPrice(): float{
        return $this->price;
    }   
    public function setPrice($price){
        $this->price=$price;
    }
    public function getAuthor(){
        return $this->author;
    }   
    public function __construct($title,$price,$author=null){
        $this->title=$title;
        $this->price=$price;
        $this->author=$author;
    }
}