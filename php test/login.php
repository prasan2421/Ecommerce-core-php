<?php
include 'Inc.php';
$obj = new Inc;


?>
<html>
<head>
    <title>PHP Test</title>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js" integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous"></script>
</head>
<body>

            <table>
                <form action="" method="POST">
                    <tr>
                        <td>User Name</td>
                        <td><input type="text" name="name" >
                        </td>
                    </tr>

                    <tr>
                        <td>Password</td>
                        <td><input type="password" name="password" >
                        </td>
                    </tr>


                    <tr>
                        <td></td>
                        <td align="right"><input type="submit" name="submit" value="Submit"></td>
                    </tr>
                </form>
            </table>

<?php
//echo sha1('123456');
if (isset($_POST['name']))
{
    //var_dump($_POST['name']);die();
    $arr['name'] = $_POST['name'];
    $arr['password'] = sha1($_POST['password']);

    //$q = $obj->insert('phptesttable', $arr);
    //$r = $obj->execute($q);
    $query=" SELECT * FROM users WHERE username = '".$arr['name']."' AND password = '".$arr['password']."' ";
    //var_dump($query);die();
    $result = mysqli_query(mysqli_connect("localhost","root","","phptest"),$query);
    if($result)
    {
        session_start();
        $_SESSION['user_id'] = $arr['name'];
//        var_dump( $_SESSION['user_id']);die();
        $obj->redirect('home.php');
    }
    else{
        echo 'username or password does not match';
    }
    //var_dump($result);die();
}
?>



</body>
</html>
