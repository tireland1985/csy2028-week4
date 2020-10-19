<?php
//use an array to contain a phrase within a list, fill/print the contents 200 times
$array = array_fill(0, 200, '<li>All work and no play makes jack a dull boy</li>');
echo implode($array);
?>