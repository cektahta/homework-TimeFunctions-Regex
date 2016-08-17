<?php
$example = "dasdsating brewding sting tingy";
preg_match_all('/([A-Z a-z])\w+/g',$example,$result);
var_dump($result);