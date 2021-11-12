<?php
// Turn on output buffering
    ob_start();
// Output one or more strings
    echo '<article>';
    echo '<h3>'.$book['bookname'].'</h3>';
    echo '<img src = "public/images/'.$book['image'].'">';
    echo '<p>Author(s): '.$book['author'].'</p>';
    echo '<p>Price: '.$book['price'].'</p>';
    echo '<p>Содержание: '.$book['description'].'</p>';
    echo '<p style="padding-top:10px;">';
    echo '<a href="books" role="button"> Back &raquo;</a>';
    echo '</p>';
    echo '</article>';


    echo '<div style="clear:both;"></div>';
//Get current buffer contents and delete current output buffe
    $content = ob_get_clean();
 include 'view/templates/layout.php';
