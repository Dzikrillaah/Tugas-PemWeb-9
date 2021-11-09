<?php
include_once("config.php");
 
$result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id DESC");
?>
 
<html>
<head>    
    <title>Tabel Mahasiswa</title>
</head>

<style>
    body{
        background-color: #b1f7f5; 
    }
</style>

<body>
 
    <table width='100%' border=1>
 
    <tr>
        <th>Nama</th>  <th>No Telepon</th> <th>Email</th> <th>Hobi</th> <th>Update</th>
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['name']."</td>";
        echo "<td>".$user_data['mobile']."</td>";
        echo "<td>".$user_data['email']."</td>";  
        echo "<td>".$user_data['hobi']."</td>";  
        echo "<td><a href='edit.php?id=$user_data[id]'>Edit</a> | <a href='delete.php?id=$user_data[id]'>Delete</a></td></tr>";        
    }
    ?>
    </table>
    <br>
    <br>
    <a href="add.php">Add New User</a>
</body>
</html>