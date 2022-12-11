<?php
    $heading = 'My notes';
    $db = new Database($config['database']);
    $notes = $db->query('select * from notes where user_id = 4')->fetchAll();

    require 'views/notes.view.php';