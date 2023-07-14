<?php
require_once "AbstractLibrary.php";
require_once "Author.php";

class Library extends AbstractLibrary{
    private $authors = [];
    public function getAuthors(): array{
        return $this->authors;
    }   
    public function setAuthors($arr){
        $this->authors=$arr;
    }
    public function addAuthor(string $authorName): Author{
        $author=new Author($authorName);
        $this->authors[]=$author;
        return $author;
    }
    public function addBookForAuthor($authorName, Book $book){
        foreach($this->authors as $auth){
            if($auth->getName()==$authorName){
                $auth->addBook($book->getTitle(), $book->getPrice());
                return; // Exit the loop if author is found           
             }
        }
    }
    public function getBooksForAuthor($authorName){
        foreach($this->authors as $auth){
            if($auth->getName()==$authorName){
                return $auth->getBooks();
            }
        }
    }
     public function search(string $bookName): Book{
        foreach ($this->authors as $auth) {
            foreach ($auth->getBooks() as $book) {
                if ($book->getTitle() == $bookName) {
                    return $book;
                }
            }
        }
    }
     public function print(){       
        foreach($this->authors as $auth){
            echo "<br>";
            echo($auth->getName()); 
            echo"<br>";
            echo "--------------------";
            echo"<br>";
            foreach($auth->getBooks() as $book){
            echo($book->getTitle()) . "  - " ; echo($book->getPrice());
            echo "<br>";
           }
        }
    }
}