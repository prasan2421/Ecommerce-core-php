<?php
session_start();
class Inc
{
    public  $link;

    function __construct()
    {
        $this->link = mysqli_connect("localhost","root","","phptest");
        if($this->link){
            echo "Connected";
        }
        else{
            echo "Not connected";
        }
    }
    function redirect($path)
    {
        echo "<script>window.location='".$path."'</script>";
    }
    function connect()
    {
        $con = mysqli_connect("localhost","root","","phptest");
        if($con){
            return $con;
        }
        else{
            return false;
        }
    }
    function insert($tbl,$array){

        $q = "INSERT INTO ".$tbl."(";
        foreach($array as $k=>$v)
        {
            $keys[]=$k;
            $vals[]="'".$v."'";
        }
        $key = implode(',',$keys);
        $val = implode(',',$vals);
        $q=$q.$key. ") VALUES (".$val.")";
        return $this->execute($q);




//        foreach($array as $k=>$a)
//        {
//            $key[] = $k;
//            $val[] = $a;
//        }
//        $key = implode(',',$key);
//        $val = implode(',',$val);
//
//        $q = "INSERT INTO ".$tbl." (".$key.") VALUES (".$val.")";
//        return $this->execute($q);

    }

    function execute($q)
    {
        return mysqli_query($this->link, $q);
    }

    function count_table($tbl)
    {
        $q = "SELECT count(id) as c FROM ".$tbl;
        $query = $this->execute($q);
        $row = $this->fetch($query);
        return $row['c'];
    }


//

    function select(){
        $myQuery = "SELECT * FROM table;";
        $results = mysqli_query($this->link, $myQuery);
        return $results;
    }

    public function update($tbl,$array,$id){
        foreach($array as $k=>$a)
        {
            $key[]=$k;
            $val[]=$a;
        }
        $key=implode(',','$key');
        $val=implode(',','$val');
        $q = "INSERT INTO '".$tbl."' ('".$key."') VALUES ('".$val."')";
        return $this->execute($q);

    }
    public function executeupdate($q){
        return mysqli_query($this->link,$q);
    }

    function num($query)
    {
        return mysqli_num_rows($query);
    }

    function fetch($query)
    {
        return mysqli_fetch_assoc($query);
    }

public function check_session()
{
    if(!isset($_SESSION['user_id']))
    {
      $this->redirect('login.php');
    }

}

}
?>