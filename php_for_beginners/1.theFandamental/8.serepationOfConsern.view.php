<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>seperation of consern</title>
</head>
<body>
<ul>
<?php foreach( $filterBooks as $book):?>
  <li>
    <a href="<?= $book['parshesUrl'] ?>"> <?= $book['name']?> and relise year is <?= $book['relizeYear']?></a>
  </li>
  <?php endforeach; ?>
 </ul>
</body>
</html>