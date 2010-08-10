<?php

require_once('../tinyTemplate.php');
$tpl = new tinyTemplate();


@$tpl->set('is_logged_in', $_GET['login']);

echo $tpl->fetch(dirname(__FILE__).'/templates/if.html');

?>
