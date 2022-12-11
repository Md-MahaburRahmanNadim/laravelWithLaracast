<?php
    $heading = 'My notes';
    $db = new Database($config['database']);
    $notes = $db->query('select * from notes')->fetchAll();

    require 'views/notes.view.php';