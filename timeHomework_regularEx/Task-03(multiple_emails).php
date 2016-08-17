<?php
$example = "pencho_04@yahoo.com";
preg_match_all('/([a-z])+(\_*|\-*)([a-z]*|\d+)+\@(gmail|abv|yahoo)\.(com|bg)/g',$example,$result);
var_dump($result);