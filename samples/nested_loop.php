<?php

require_once('../tinyTemplate.php');
$tpl = new tinyTemplate();

$array = array(
  0 => array(
    'name' => 'Brian',
    'pass' => 'secret',
    'colors' => array(
      0 => 'red',
      1 => 'green',
      2 => 'blue'
    )
  ),
  1 => array(
    'name' => 'Mike',
    'pass' => 'freak',
    'colors' => array(
      0 => 'orange',
      1 => 'yellow',
      2 => 'black'
    )
  )
);

$tpl->set('results', $array);

echo $tpl->fetch(dirname(__FILE__).'/templates/nested_loop.html');

?>
