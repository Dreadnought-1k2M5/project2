<?php

$config = require('config.php');
$db = new Database($config["database"]);

$heading = "Note";
$currentUserId = 4;


$note = $db->query("select * from notes where id = :id", [
    'id' => $_GET['id']
    ])->fetch();

//check if note doesn't exist
//If note doesn't exist from table, then $note query holds a boolean value of FALSE
if(!$note){
    abort();
}

//check if note is being accessed by a different user
if($note['user_id'] != $currentUserId){
    abort(Response::FORBIDDEN);
}

require "views/note.view.php";