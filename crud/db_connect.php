<?php 

$link = @mysqli_connect('localhost', 'root', '', 'test');

if(!$link){
    echo " not connect";
}

?>