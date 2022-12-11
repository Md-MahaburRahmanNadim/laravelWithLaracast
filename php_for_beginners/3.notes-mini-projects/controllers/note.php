<?php
    $heading = 'Note';
    $db = new Database($config['database']);

    // by editing the query we are trying to authenticate the  $note = $db->query('select * from notes where user_id = :user and id = :id',[
    $note = $db->query('select * from notes where id = :id',[
        // 'user' => 4,
        'id'=>$_GET['id']
        ])->fetch();
    
    if(!$note){
        abort();
    }
    // magic number
    $currentUserId = 4;
    if($note['user_id'] !== $currentUserId){
        abort(Response::HTTP_FORBIDDEN);
    }
    require 'views/note.view.php';
    // authenication