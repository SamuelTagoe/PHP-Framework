<?php
require 'functions.php';
require 'router.php';
require 'config.php';
require 'Database.php';

$config = require('config.php');

$db = new Database($config['database']);

$id = isset($_GET['id']) ? $_GET['id'] : null;
$query = "select * from post where id = :id";

$post = $db->query($query, [':id' => $id])->fetch();


// phpinfo();
