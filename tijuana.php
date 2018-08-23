<?php 
require 'twig.php';

$params = array(
	'title' => 'Casa Habano | Cozumel',
	'op'=>$op,
	'content'=>$tijuana

);
$template = $twig->load('destination.twig');
echo $template->render($params);

?>