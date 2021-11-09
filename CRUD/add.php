<html>
<head>
    <title>Add Data</title>
</head>
 
<style>
    body{
        background-color: #b1f7f5; 
    }
</style>

<body>
    <a href="index.php">Go to Home</a>
    <br/><br/>
 
    <form action="add.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr> 
                <td>Nama</td>
                <td><input type="text" name="name"></td>
            </tr>
                <td>Email</td>
                <td><input type="text" name="email"></td>
            </tr>
            <tr> 
                <td>No Telepon</td>
                <td><input type="text" name="mobile"></td>
            </tr>
            <tr>
                <td>Hobi</td>
                <td><input type="text" name="hobi"></td>
            <tr> 
                <td></td>
                <td><input type="submit" name="Submit" value="Add"></td>
            </tr>
        </table>
    </form>
    
    <?php
 
    if(isset($_POST['Submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        $hobi = $_POST['hobi'];
        
        include_once("config.php");
                
        $result = mysqli_query($mysqli, "INSERT INTO users(name,email,mobile,hobi) VALUES('$name','$email','$mobile','$hobi')");
        
        echo "User added successfully. <a href='index.php'>View Users</a>";
    }
    ?>
</body>
</html>