<?php

require 'functions.php';

//require 'router.php';

require 'Database.php';

$config = require('config.php');

$db = new Database($config["database"]);
$posts = $db->query("SELECT * FROM posts where id = 1")->fetchAll();

/* dd($posts['title']); */


echo "<ul>";
foreach($posts as $post){
    echo "<li>" . $post['title'] . "</li>";
}
echo "</ul>";
