<?php
$example = "CT1234RD";
preg_match_all('/(CT\d{4}\w{2})/i',$example,$result);
var_dump($result);