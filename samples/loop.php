<?php

require_once('../tinyTemplate.php');
$tpl = new tinyTemplate();

$fruits = array(
    'apple',
    'orange',
    'cherry',
);

$tpl->set('fruits', $fruits);

echo $tpl->fetch(dirname(__FILE__).'/templates/loop.html');

?>
