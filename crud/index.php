<?php 
   include 'db_connect.php';

   if(isset($_POST['btn'])){
        
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    $sql = " INSERT INTO emp (id,name,email,password) VALUES (NULL,'$name','$email','$pass') ";

    $result= @mysqli_query($link,$sql);
    if($result){
      header("location:show.php");
    }else{
      echo " somethig wrong!! ";
    }
   }



?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
</head>
<style>
  form{
    margin: 100px;
    border: 2px solid black;
    width: 60%;
    padding: 50px;
  }
  
</style>

<body>
      <div>
        <center>
            <form method="POST">
              <h2>insert record</h2>
              <div class="main">
                <input class="form-control" type="text" name="name" id="" placeholder="name" ><br>
                <input class="form-control" type="email" name="email" id="" placeholder="email" ><br>
                <input class="form-control" type="password" name="pass" id="" placeholder="password" ><br>
 
                <button name="btn" type="submit" class="btn btn-primary">submit</button>
              </div>

            </form>
        </center>
      </div>
</body>
</html>