<?php 
require 'twig.php';
$cookie =  $_COOKIE["adult"];
$params = array(
	'title' => 'Casa Habano | Cabos',
	'op'=>$op,
	'content'=>$cabos,
	'cookie'=>$cookie

);
$template = $twig->load('destination.twig');
echo $template->render($params);

?>