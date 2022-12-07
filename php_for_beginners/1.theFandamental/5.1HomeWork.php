<!-- Create an array of any three usernames - perhaps for a "Top Performing Users" section of your website. Then, create a loop that displays each username within a list item. -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home work 1</title>
</head>
<body>
  <?php
  $users = ['John', 'Mohamad', 'Abdullah'];
  ?>
  <ul>
    <?php foreach($users as $user): ?>
      <li><?= $user ?></li>
    <?php endforeach; ?>
</body>
</html>