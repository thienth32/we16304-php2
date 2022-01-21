<?php

require_once './vendor/autoload.php';

use Models\User;
use Models\Post;
use Models\Comment;

$x = new User();
$y = new Post();
var_dump($x, $y);


?>