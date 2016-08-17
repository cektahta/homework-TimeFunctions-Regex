<?php
//find "is"

$example1 = "dasdisdasdasis is dasdsais dasdsais";
preg_match_all('/(is)/g',$example1,$result1);
var_dump($result1);