<?php

// require_once './models/Comment.php';
// require_once './models/Post.php';
// require_once './models/User.php';

spl_autoload_register(function($var){
    require_once './' . strtolower(str_replace("\\", "/", $var)) . ".php";
});


use Models\User;
use Models\Post;
use Models\Comment;

$x = new User();
$y = new Post();
var_dump($x, $y);
// echo Post::TBL_NAME;

?>