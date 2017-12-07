<html>
<?php
include ('Inc.php');
$obj=new Inc;
$obj->check_session();
?>
<head>
    <title>PHP Test</title>
</head>
<body>

hello <?php
echo $_SESSION ['user_id']
?>
<!-- end database connect-->


<?php

//if (isset($_POST['submit'])) {
//
//
//    $name = $_POST['name'];
//    $address = $_POST['address'];
//    $phone = $_POST['phone'];
//
//
//    if(!$q){
//        die('error'. myqli_error());
//    }
//    else{
//        $query = "SELECT * FROM phptesttable";
//    }
//
//
//    if (mysqli_query($q,$query)) {
//        echo '';
//    } else {
//        echo '<br>Input data is not valid';
//    }
//}
//?>

</body>
</html>