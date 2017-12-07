<?php
include 'Inc.php';
$obj = new Inc;


?>
<html>
<head>
    <title>PHP Test</title>
</head>
<body>

<table border="1">
    <tr>
        <td align="center">Form Input Employees Data</td>
    </tr>
    <tr>
        <td>
            <table>
                <form action="" method="POST">
                    <tr>
                        <td>Name</td>
                        <td><input type="text" name="name" >
                        </td>
                    </tr>

                    <tr>
                        <td>Address</td>
                        <td><input type="text" name="address" >
                        </td>
                    </tr>

                    <tr>
                        <td>Phone</td>
                        <td><input type="number" name="phone" >
                        </td>
                    </tr>

                    <tr>
                        <td></td>
                        <td align="right"><input type="submit"
                                                 name="submit" value="Submit"></td>
                    </tr>
            </table>
        </td>
    </tr>
</table>

<?php
if (isset($_POST['submit'])) {

    $arr['name'] = $_POST['name'];
    $arr['address'] = $_POST['address'];
    $arr['phone'] = $_POST['phone'];

    $q = $obj->insert('phptesttable', $arr);
    $r = $obj->execute($q);
}
?>


</body>

</html>
<!--<!--database connect-->

<!--include 'connect.php';-->
<!---->
<!--<!--<!-- end database connect-->
<!--<!---->
<!--<!---->
<!---->
<!--//-->


<!--//  if(!$q){-->
<!--//        die('error'. myqli_error());-->
<!--//    }-->
<!--//    else{-->
<!--//        $query = "INSERT INTO phptesttable(name,address,phone) VALUES ('$name','$address','$phone')";-->
<!--//    }-->
<!--//-->
<!--//-->
<!--//    if (mysqli_query($q,$query)) {-->
<!--//        echo '<br>Input data is successful';-->
<!--//    } else {-->
<!--//        echo '<br>Input data is not valid';-->
<!--//    }-->
<!--//}-->


