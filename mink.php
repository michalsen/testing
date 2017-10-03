<?php

require __DIR__ . '/vendor/autoload.php';

use Behat\Mink\Driver\GoutteDriver;
use Behat\Mink\Session;

$driver = new GoutteDriver();

$session = new Session($driver);

$session->visit('http://local.ericd8.com/contact');

var_dump($session->getStatusCode(), $session->getCurrentUrl());

$page = $session->getPage();

//$tags = $page->find('named', array('content', 'H1'));
$tags = $page->find('named', array('id', 'contact-form'));

var_dump($tags);

//$header = $page->find('css', '.site-branding__name');
//var_dump($header->getText());