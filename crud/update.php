<?php 
   include 'db_connect.php';

   if(isset($_POST['btn'])){
       $id = $_GET['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    $sql = " UPDATE emp set name='$name', email='$email', password='$pass' WHERE id='$id' ";

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
<?php
  $n =  $_GET['name'];
  $e =  $_GET['email'];
  $p =  $_GET['password'];
    
?>
<body>
      <div>
        <center>
            <form method="POST">
              <h2>update record</h2>
              <div class="main">
                <input class="form-control" type="text" name="name" id="" placeholder="name" value= "<?php echo $n ; ?>" ><br>
                <input class="form-control" type="email" name="email" id="" placeholder="email" value= "<?php echo $e ; ?>" ><br>
                <input class="form-control" type="password" name="pass" id="" placeholder="password" value= "<?php echo $p ; ?>" ><br>
 
                <button name="btn" type="submit" class="btn btn-success">update</button>
              </div>

            </form>
        </center>
      </div>
</body>
</html>