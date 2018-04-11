<?php

class ServicesLibrary {

    public function __construct() {
        
    }

    public function get_price($bookname) {
        $books = array('java' => 299, 'c' => 348, 'php' => 580);
        foreach ($books as $book => $price) {
            if ($book == $bookname) {
                return $price;
                break;
            }
        }
    }

}

?>