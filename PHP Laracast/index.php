<?php

require 'function.php';

// require 'routes.php';



//require Database
require 'Database.php';
//class database

$config = require('config.php');

$db = new Database($config['database']);

$id = $_GET['id'];

$query = "SELECT * FROM doctor WHERE id = :id";

$posts = $db->query($query, ['id' => $id])->fetch();

dd($posts);
