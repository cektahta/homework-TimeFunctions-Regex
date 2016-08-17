<?php
$example = "dasdsating brewding sting tingy";
preg_match_all('/\w+ting\b/g',$example,$result);
var_dump($result);