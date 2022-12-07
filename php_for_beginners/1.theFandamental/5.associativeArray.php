<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>AssociativeArray</title>
</head>
<body>
  <?php
  // some islamic books and their authors and the parches url of the books 
  $books = [
     [
      'name' => 'Al quran', 'author' => 'Allah', 'url' => 'https://www.google.com/search?q=al+quran+pdf'
    ],
      [
        'name' => 'Hadith', 'author' => 'Mohamad (S:)', 'url' => 'https://www.google.com/search?q=hadith+pdf'
      ],
      [
        'name' => 'Tafsir', 'author' => 'Ebna Kasir(R:)', 'url' => 'https://www.google.com/search?q=tafsir+pdf'
      ],
      
  ];
  ?>
  <ul>
    <?php foreach($books as $book): ?>
      <li>
        <a href="<?= $book['url'] ?>"><?= $book['name'] ?></a>
        <p>Author: <?= $book['author'] ?></p>
      </li>
    <?php endforeach; ?>
  </ul>
  


</body>
</html>