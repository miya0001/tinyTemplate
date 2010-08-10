<?php

require_once('../tinyTemplate.php');
$tpl = new tinyTemplate();

$user = array(
    array('name'=>'Mike', 'phone'=>'111-1111', 'address'=>'Tokyo'),
    array('name'=>'John', 'phone'=>'222-2222', 'address'=>'Osaka'),
    array('name'=>'Kate', 'phone'=>'333-3333', 'address'=>'Nagoya'),
);

$tpl->set('user', $user);

echo $tpl->fetch(dirname(__FILE__).'/templates/hash.html');

?>
