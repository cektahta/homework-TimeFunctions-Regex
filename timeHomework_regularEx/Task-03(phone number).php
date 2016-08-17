<?php
$example = "0899 555666";
preg_match_all('/08[8-9][1-9]\s*\d{3}(\s*|-)\d{3}/g',$example,$result);
var_dump($result);