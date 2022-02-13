<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database</title>
</head>
<body>
<table border ="1" cellpadding="10" cellspacing="0">
  <tr>
    <th>ID</th>
    <th>Nama</th>
    <th>Alamat</th>
    <th>Jabatan</th>
  </tr>

    <?php
    $con = new mysqli("172.19.0.3","root", "uas-sa" , "User");
    if($con -> connect_error){
        die('Connection to Database Error!'.$con->error);
    }
    $db_query = "SELECT * FROM user";
    $res = $con->query($db_query);
    while($row = $res->fetch_assoc()){
    ?>
            <tr>
            <td><?=$row['ID'];?></td>
            <td><?=$row['Nama'];?></td>
            <td><?=$row['Alamat'];?></td>
            <td><?=$row['Jabatan'];?></td>
            </tr>
    <?php
    }
    ?>
    
</body>
</html>
