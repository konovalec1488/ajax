<?php

//echo 'ЕВРИКА !!!';
if($_GET['name']){
    $str='Welcome ';
    $str.=filter_input(INPUT_GET, 'name');
}
echo $str;

