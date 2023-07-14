<?php
abstract class AbstractLibrary
{
    private $authors = [];
    abstract public function addAuthor(string $authorName): Author;
    abstract public function addBookForAuthor($authorName, Book $book);
    abstract public function getBooksForAuthor($authorName);
    abstract public function search(string $bookName): Book;
    abstract public function print();
}