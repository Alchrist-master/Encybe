<?php 
include 'models/articles.php';
$arr = array(
	"mariner" =>"lol",
	"java"=>"lol",
	"malachite"=>"lol",
	"emerald"=>"lol",
	"casablanca"=>"lol",
	"brilliantrose"=>"lol",
	"cinnabar"=>"lol",
	"plum"=>"lol",
);
$arr_rand =array_rand($arr);

if (isset($_POST['recherche'])) {
	$search = strip_tags(trim($_POST['article']));
}


include 'views/article.php'; ?>