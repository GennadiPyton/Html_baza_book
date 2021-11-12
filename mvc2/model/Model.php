<?php


// received a list of all books.
    class Model{

        public function getBookList() {
            require_once 'model/booksArray.php';
            return $books;
        }
// using the get one book function shows that each book has its own name (returns one book or the entire list of books for review).
        public function getBook($title){
            $allBook = Model::getBookList();
            $i = 0;
            $test = array(false);
            foreach ($allBook as $oneBook) {
                if($oneBook['bookname'] ==$title){
                    $test = array(true, $allBook[$i]);
                    return $test;
                }
                $i++;

            }
            return $test;
        }
    }
 ?>
