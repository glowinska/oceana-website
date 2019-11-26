<?php
$pagetitle = array(
    'title' => 'Simple Website Ltd.',
);

$header = array(
	'title' => 'OCEANA',
	'motto' => 'SAVE THE OCEANS, FEED THE WORLD.'
);

$footer = array(
    'copyright' => 'Copyright '.date("Y").'.',
	'original' => 'Original Oceana website:',
    'firm' => 'Simple Website Ltd.',
	'oceana' => 'https://oceana.org/'
);

$pages = array(
	'/' => array('file' => 'home', 'text' => 'Home'),
	'history' => array('file' => 'history', 'text' => 'History'),
	'campaigns' => array('file' => 'campaigns', 'text' => 'Campaigns'),
	'books' => array('file' => 'books', 'text' => 'Books'),
    'videos' => array('file' => 'videos', 'text' => 'Videos')
);

$error_page = array ('file' => '404', 'text' => 'Page not found!');
?>