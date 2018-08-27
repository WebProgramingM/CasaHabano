<?php 
require 'twig.php';
$cookie =  $_COOKIE["adult"];
$params = array(
	'title' => 'Casa Habano | Home',
	'op'=>$op,
	'content'=>$home,
	'cookie'=>$cookie

);
$template = $twig->load('home.twig');
echo $template->render($params);

?>