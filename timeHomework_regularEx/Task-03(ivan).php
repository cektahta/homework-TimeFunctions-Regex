<?php
$example = "ivan dasdas ivan dasivan ivan dasdsadas ivan";
preg_match_all('/\bivan\b/g',$example,$result);
var_dump($result);