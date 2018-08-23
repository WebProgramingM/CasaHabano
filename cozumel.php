<?php 
require 'twig.php';

$params = array(
	'title' => 'Casa Habano | Cozumel',
	'op'=>$op,
	'content'=>$cozumel

);
$template = $twig->load('destination.twig');
echo $template->render($params);

?>