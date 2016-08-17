<?php
$example = "5 500 1000 1789 10000 15000 21000 2131231232132131212312312";
preg_match_all('/\b(([1-9]\d{3})|([1][1-9][0][0][0]))\b}/g',$example,$result);
var_dump($result);