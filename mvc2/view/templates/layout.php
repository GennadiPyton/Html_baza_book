<html>
<head>
<link rel="stylesheet" href="public/css/bootstrap.min.css">
<link rel="stylesheet" href="public/css/mystyle.css">
</head>
<body>
    <div class="container">
        <div class="header clearfix">
    <h2>Книжный магазин</h2>
        <h4 class="text-muted">
            <?php
            echo '<a href="./">Главная</a> &#187';
            echo '<a href="books">Книги</a>';
            if (!empty($book['bookname'])) echo '&#187'.$book['bookname'];
           ?>
           
        
        </h4> 
     </div>
     <div id="content" style="padding:top20px;">
     <?php
        echo $content;

      ?>
      
      
    </div>
    <footer class="footer">
        <p>&copy; Year Design <i class="fa fa-child"></i></p>
    </footer>
  </div>
    
</body>
</html>