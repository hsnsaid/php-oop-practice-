<?php
class Author {
    public string $name;
    public $books = [];
    public function getName(): string{
        return $this->name;
    }   
    public function setName($name){
        $this->name=$name;
    }
    public function getBooks(): array{
        return $this->books;
    }   
    public function setBooks($books){
        $this->books=$books;
    }
    public function __construct($name,$book=null){
        $this->name=$name;
        $this->book=$book;
    }
    public function addBook(string $title, float $price): Book
    {
        $book=new Book($title,$price,$this);
        $this->books[]=$book;
        return $book;
    }
}