<?php

require_once('../tinyTemplate.php');
$tpl = new tinyTemplate();

$name = 'Mike';

$tpl->set('name', $name);

echo $tpl->fetch(dirname(__FILE__).'/templates/simple.html');

?>
