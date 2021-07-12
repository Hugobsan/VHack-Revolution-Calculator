<?php
$str_lang=$_SERVER['HTTP_ACCEPT_LANGUAGE'];
$lang="pt";
if(strpos($str_lang,'en') && !strpos($str_lang,'pt')){
    $lang="en";
}
header("Location: $lang/");

?>