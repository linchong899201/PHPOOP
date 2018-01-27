<?php

// Require psr-0 autoloader
require 'autoload.php';

$administrator = new Jiexi\App\Administrator();
$administrator->articleid = 'd-1512664540';
var_dump($administrator->articleid);
var_dump($administrator->getArticalData());

