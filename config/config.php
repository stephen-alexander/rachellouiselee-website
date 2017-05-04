<?php

$root = "http://" . $_SERVER['SERVER_NAME'] . '/';
$testRoot = $root . 'test/';

return array(
    'baseURL' => $root,
    'style' => $root.'style/style.css',
	'templates' => $root.'templates',
	'lightbox' => $root.'lightbox',
	'images' => $root.'images',
	'controllers' => $root.'controllers',
	'views' => $root.'views'
);
?>