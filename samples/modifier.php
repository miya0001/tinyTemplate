<?php

require_once('../tinyTemplate.php');
$tpl = new tinyTemplate();

$str = '<font color="red">foo</font>';

$tpl->set('filtered', $str);
$tpl->set('notfiltered', $str, false);

echo $tpl->fetch(dirname(__FILE__).'/templates/modifier.html');

?>
