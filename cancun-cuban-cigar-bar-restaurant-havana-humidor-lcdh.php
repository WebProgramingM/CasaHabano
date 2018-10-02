<?php 
require 'twig.php';
$cookie =  $_COOKIE["adult"];
$params = array(
	'title' => 'Casa Habano | Cancun',
	'op'=>$op,
	'content'=>$cancun,
	'cookie'=>$cookie

);
$template = $twig->load('destination.twig');
echo $template->render($params);

?>