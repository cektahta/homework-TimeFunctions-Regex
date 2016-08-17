<?php
$example1 = "Dsdasdsa@gmail.com";
preg_match_all('/([a-z])+(\_*|\-*)([a-z]*)+\@gmail\.com/i',$example1,$result1);
var_dump($result1);