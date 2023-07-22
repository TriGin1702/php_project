<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
            if(isset($_POST['btnSubmit'])){
                $username = "minhtri1702";
                $password = "gin230695";
                $u = $_POST['txtName'];
                $p = $_POST['txtPass'];
                if (($u == $username) && ($p == $password)){
                    $_SESSION['txtName'] = $username;
                    header('location: index.php');
                }
                else{
                    echo "tên đăng nhập hoặc mật khẩu không đúng !";
                }
            }
    ?>
<form action="admin.php" method="post">
    <table border="0">
    <tr>
        <th width="17%" scope="col"><div align="left">Username:</div></th>
        <th width="83%" scope="col"><div align="left">
        <input name="txtName" type="text" value="" />
        </div></th>
    </tr>
    <tr>
        <th scope="row"><div align="left">Password:</div></th>
        <td><div align="left">
        <input name="txtPass" type="password" value="" />
        </div></td>
    </tr>
    <tr>
        <th scope="row"><div align="left"></div></th>
        <td><div align="left">
        <input name="btnSubmit" type="submit" value="OK" />
        </div></td>
    </tr>
    </table>
</form>
</body>
</html>