<?php

$uppr_case = "AABCDEFHIJKLMMNOPQRSSTUVWXYZ";
$number = "012334567889";

$generated_uppr_case = substr(str_shuffle($uppr_case), 0,8);
$generated_numbers = substr(str_shuffle($number), 0,8);
$generated_uppr_case1 = substr(str_shuffle($uppr_case), 0,8);
$generated_numbers1 = substr(str_shuffle($number), 0,8);

$auto = "$generated_uppr_case$generated_numbers$generated_uppr_case1$generated_numbers1";

?>