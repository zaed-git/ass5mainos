<?php
//////////////////// 
//  interface class Borrowable
////////////////
interface Borrowable
{
    public function borrowBook();
    public function returnBook();
}
//////////////////// 
///// class book
//////////////////// 
class Book implements Borrowable
{

    private $title;
    private $availableCopies;

    // public function __construct()
    public function __construct($title, $availableCopies)

    {
        $this->title = $title;
        $this->availableCopies = $availableCopies;
    }


    public function getTitle()
    {
        return $this->title;
    }


    public function getAvailableCopies()
    {
        return $this->availableCopies;
    }


    public function borrowBook()
    {

        return    $this->availableCopies > 0 ? $this->availableCopies-- : " no books available";
    }


    public function returnBook()
    {
        return $this->availableCopies++;
    }
}
//////////////////// 
///// class member
//////////////////// 
class Member
{

    private $name;


    public function __construct($name)
    {
        $this->name = $name;
    }


    public function getName()
    {
        return $this->name;
    }


    public function borrowBookall($book)
    {

        echo   $book->borrowBook() > 0  ? "" :  "No copies available for '{$book->getTitle()}'.\n";
    }


    public function returnBookall($book)

    {
        $available =  $book->returnBook();
        $available  > 0 ? $available : "no available ";
    }
}

// create books
// $book1 = new Book();
$book1 = new Book("The Great Gatsby", 5);
// $book2 = new Book();
$book2 = new Book("To Kill a Mockingbird", 3);

// create members
$member1 = new Member("John Doe");

$member2 = new Member("Jane Smith");

// $member3 = new Member("Jane John  ");

// member1 borrow books
$member1->borrowBookall($book1);

// member1 return books

$member1->returnBookall($book1);
//member1 borrow books
$member1->borrowBookall($book1);
//member2 borrow books
$member2->borrowBookall($book2);
// $member2->borrowBookall($book2);


echo "Available Copies of " . "'" . $book1->getTitle() . "' : "  . $book1->getAvailableCopies() . "\n";

echo "Available Copies of '" . $book2->getTitle() . "': " . $book2->getAvailableCopies() . "\n";
