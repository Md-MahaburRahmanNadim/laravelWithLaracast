<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bolian and conditionals</title>
  <style>
    body{
      display: grid;
      place-items: center;
      height: 100vh;
      margin: 0;
    }
  </style>
</head>
<body>
  <?php
  $book_name = 'Al quran';
  $is_read = false;
  if($is_read){
    $message = "You have read $book_name";
  }else{
    $message = "You have not read $book_name";
  }
  ?>
  <h1><?php echo $message; ?></h1>
  <!-- alternative syntax for echoing a single varaible 
  if php tag going to close a varaible we do't need to give the ;
-->
  <h1><?= $message ?></h1>
  <!-- alternative syntax for echoing a single varaible 
  if php tag going to close a varaible we do't need to give the ;
</body>
</html>

