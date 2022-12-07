<!-- creating function and filtering the data based on author name and realise year -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function and fuiltering</title>
</head>
<body>
    <?php
        $books = 
        [
            [
            'author'=> 'Md. Nadim',
            'name'=> 'Not become a reach persion',
            'relizeYear'=>2022,
            'parshesUrl'=> 'example.com'
            ],
            [
            'author'=> 'Md. Nadim',
            'name'=> 'Sex is the course in young people',
            'relizeYear'=>2022,
            'parshesUrl'=> 'example.com'
            ],
            [
            'author'=> 'Md. Nadim',
            'name'=> 'How manage your time',
            'relizeYear'=>2022,
            'parshesUrl'=> 'example.com'
            ],
            [
            'author'=> 'Md. Nadim Hasan',
            'name'=> 'Are you read quran everyday?',
            'relizeYear'=>2022,
            'parshesUrl'=> 'example.com'
            ],
            
        ];

        function filterByAuthor($books,$author){
            $filterBook = [];
            foreach($books as $book){
                if($book['author'] === $author ){
                    $filterBook[] = $book;
                }
            }
            return $filterBook;

        }

    
    ?>
    <ul>
<?php foreach( filterByAuthor($books,'Md. Nadim Hasan') as $book):?>
    <li>
        <a href="<?= $book['parshesUrl']?>">
            <?= $book['name']?>
        </a>
    </li>
<?php endforeach ?>
    </ul>
</body>
</html>