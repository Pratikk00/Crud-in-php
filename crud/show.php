<?php 
   include 'db_connect.php';
   $sql = "SELECT * FROM emp ";
   $result=@mysqli_query($link,$sql);

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
</head>
<style>
    .main{
        width: 60%;
        margin: 100px;
    }
</style>
<body>
    <center>

        <div class="main">
            <h2>display data form database</h2><br>
            <table class="table">
                <thead >
                    <tr>
                        <th>id</th>
                        <th>name</th>
                        <th>email</th>
                        <th>password</th>
                        <th>action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while($row = mysqli_fetch_row($result)) { ?>
                    <tr>
                        <td><?php echo $row[0]; ?></td>
                        <td><?php echo $row[1]; ?></td>
                        <td><?php echo $row[2]; ?></td>
                        <td><?php echo $row[3]; ?></td>
                        <td><a href="update.php? &id=<?php echo $row[0]; ?>  &name=<?php echo $row[1]; ?> &email=<?php echo $row[2]; ?> &password=<?php echo $row[3]; ?>"><button class="btn btn-success">update</button></a> 
                        <a href="delete.php?&id=<?php echo $row[0]; ?>"><button class="btn btn-danger" >delete</button></a></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </center>
</body>
</html>