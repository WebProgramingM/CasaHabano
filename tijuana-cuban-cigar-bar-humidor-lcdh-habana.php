<?php 
require 'twig.php';
$cookie =  $_COOKIE["adult"];
$params = array(
	'title' => 'Casa Habano | Tijuana',
	'op'=>$op,
	'content'=>$tijuana,
	'cookie'=>$cookie

);
$template = $twig->load('destination.twig');
echo $template->render($params);

?>