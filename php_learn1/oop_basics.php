<?php

    class Book{

        private $author;
        private $name;
        public $class_count = 0;

        //set construtor
        function __construct($author, $name){
            $this->author = $author;
            $this->name = $name;
            $this->class_count+=1;
            echo __CLASS__."has been created <br>";
            
        }

        //setter getters

        function setName($name){
            $this->name = $name;
        }

        function setAuthor($author){
            $this->author = $author;
        }

        function getName(){
            return $this->name;
        }


        function getAuthor(){
            return $this->author;
        }

    }

$book1 = new Book("jk rowling","hp");
echo $book1->getAuthor()."<br>";
echo $book1->class_count."<br>";

$book1 = new Book("aghatha cristie","ABC murders");
echo $book1->getAuthor()."<br>";
echo $book1->class_count."<br>";


//ineheritence 
//extends keyword for inheritance

class Library extends Book {

    private $issue_date;

    //set constructor
    function __construct($author,$name,$issue_date){
        parent::__construct($author,$name);
        $this->issue_date=$issue_date;
        echo __CLASS__." has been created<br>";

    }

    function getIssueDate(){
        return $this->issue_date;
    }

    function setIssueDate($issuedate){
        $this->issuedate = $issuedate;
    }


}

$issue1 = new Library("maheen","tinkerbell",date("d-m-y"));
echo "book details are \n".$issue1->getAuthor()." ".$issue1->getName()." ".$issue1->getIssueDate()."<br>";


//dealinhg with static variables

class Sample{
    static $dummy = "dummy variable";

    //getter for staic property
    static function getDummy(){
        return $self::dummy; //pointer to static variable is "self"
    }

    //setter for staic property
    static function setDummy($dummy){
        static::$dummy=$dummy;
    }
}

echo "static variable is ".Sample::$dummy."<br>";
Sample::setDummy("dummy changed");
echo "new static is  ".Sample::$dummy."<br>";



?>
