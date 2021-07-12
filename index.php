<?php
$str_lang=$_SERVER['HTTP_ACCEPT_LANGUAGE'];
$str_lang=substr($str_lang, 0, 5);
if($str_lang!="pt-BR"){
    $lang="en";
}
else{
  $lang="pt";
}
header("Location: $lang/");
?>