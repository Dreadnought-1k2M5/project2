<?php

require 'functions.php';
require 'Database.php';
require 'Response.php';
require 'router.php';





/* ----------------------------------------------------- */
/* $config = require('config.php');
$db = new Database($config['database']);

$id = $_GET['id']; // localhost:10/?id=2 - get query string value
$query = "SELECT * FROM notes where user_id = ?"; // Use '?' to bind value. Never inline/concatenate user values/variables to SQL query string (SQL injection vulnerability)
$posts = $db->query($query, [$id])->fetch(); // know the difference between fetch() and fetchALl() output

dd($posts); */




/* echo "<ul>";
foreach($posts as $post){
    echo "<li>" . $post['title'] . "</li>";
}
echo "</ul>"; */

