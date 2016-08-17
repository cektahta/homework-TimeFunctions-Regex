<?php
$example = "<!doctype>";
preg_match_all('/<!*\w+>/g',$example,$result);
var_dump($result);