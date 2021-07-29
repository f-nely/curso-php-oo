<?php

require_once 'src/Classes/Category.php';
require_once 'src/Classes/Post.php';

use App\Classes\Category;
use App\Classes\Post;

$programacao = new Category;
$programacao->setName('PHP');

$post01 = new Post();
$post01->setTitle('PHP: Hypertext Preprocessor');
$post01->setContent('PHP is an amazing and popular language!');
$post01->setCategory($programacao);

echo $post01->getTitle();
echo "<br>";
echo $post01->getContent();
echo "<br>";
echo $post01->getCategory();


