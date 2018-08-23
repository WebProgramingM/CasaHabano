<?php 
require 'twig.php';

$params = array(
	'title' => 'Casa Habano | Home',
	'op'=>$op

);
$template = $twig->load('home.twig');
echo $template->render($params);

?>