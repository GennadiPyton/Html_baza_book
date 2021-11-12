<?php


// Controller Basics
class Controller{


// access without instantiating the class.
    public function StartSite(){
        include 'view/main.php';
    }
// functions can be accessed without creating an object.
    public function BookList(){
        $booksList = Model::getBookList();
        include 'view/bookList.php';
    }

    public function BookOne($title){
        $test = Model::getBook($title);
        if ($test[0]==true){
            $book = $test[1];
            include 'view/bookOne.php';
        }
        // connecting error checking
        else {
            include 'view/error404.php';
        }
    }
    // functions don't work (error404).
    public function error404(){
        include 'view/error404.php';
    }
}
 ?>
