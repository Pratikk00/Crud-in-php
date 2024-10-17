<?php
   include 'db_connect.php';
$id = $_GET['id'];
$sql = "DELETE from emp WHERE id='$id' ";

 $result= @mysqli_query($link,$sql);
    if($result){
      header("location:show.php");
    }else{
      echo " somethig wrong!! ";
    }
   

?>