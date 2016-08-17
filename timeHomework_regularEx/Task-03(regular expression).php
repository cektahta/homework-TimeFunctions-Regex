<?php
$example1 = "if ($a == 5) {}";
preg_match_all('/if\s\((\$\w*|\d*)\s((=|!|<|>)|((=|!|<|>)(=|!|<|>)))\s(\$\w*|\d*)\)\s\{\}/g',$example1,$result1);
var_dump($result1);