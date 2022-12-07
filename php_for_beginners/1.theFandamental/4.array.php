<!-- index array -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Index array</title>
</head>
<body>
  <?php
  $books = ['Al quran', 'Hadith', 'Tafsir'];
  ?>
  <ul>
    
      <?php
      foreach($books as $book):?>
      <li><?= $book ?></li>
      <?php endforeach; ?>
      
    
  </ul>
</body>
</html>