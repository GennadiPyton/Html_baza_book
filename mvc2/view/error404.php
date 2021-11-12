<?php
// Turn on output buffering
    ob_start()
 ?>
 <h2>404 error</h2>
 <article>
     <p>
         не найдено
     </p>
 </article>

 <?php
        //Get current buffer contents and delete current output buffer
  $content = ob_get_clean();
 ?>
 <?php
 include 'view/templates/layout.php';
 ?>
