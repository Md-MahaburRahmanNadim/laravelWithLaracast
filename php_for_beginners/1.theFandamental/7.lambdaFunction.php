<?php
 $books = 
 [
     [
     'author'=> 'Md. Nadim',
     'name'=> 'Not become a reach persion',
     'relizeYear'=>1922,
     'parshesUrl'=> 'example.com'
     ],
     [
     'author'=> 'Md. Nadim',
     'name'=> 'Sex is the carse in young people',
     'relizeYear'=>2021,
     'parshesUrl'=> 'example.com'
     ],
     [
     'author'=> 'Md. sakib',
     'name'=> 'How manage your time',
     'relizeYear'=>2000,
     'parshesUrl'=> 'example.com'
     ],
     [
     'author'=> 'Md. Hasan',
     'name'=> 'Are you read quran everyday?',
     'relizeYear'=>1972,
     'parshesUrl'=> 'example.com'
     ],
     
 ];

//  $filter = function($items,$key,$value){
  $filter = function($items,$fn){
  $filteredItem = [];
  foreach($items as $item){
    // if($item[$key] === $item[$value]){
      if($fn($item)){

      $filteredItem[]= $item;
    }
  }
  return $filteredItem;
 };
//  $filterBooks = $filter($books,'author','Md. Hasan');
 $filterBooks = $filter($books,function($book){
  return $book['relizeYear'] > 1950 && $book['relizeYear'] < 2020;// flexibleing logice here. we retrive this logic from the main fn body and put it into the fn call to flexible the logic or cotrol the logic via user  
 });
?>
 <ul>
<?php foreach( $filterBooks as $book):?>
  <li>
    <a href="<?= $book['parshesUrl'] ?>"> <?= $book['name']?> and relise year is <?= $book['relizeYear']?></a>
  </li>
  <?php endforeach; ?>
 </ul>