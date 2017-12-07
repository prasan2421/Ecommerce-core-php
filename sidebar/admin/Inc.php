<?php
session_start();
class admin
{
    public $link;
    function __construct()
    {
        $this->link=mysqli_connect("localhost","root","","admindatabase");

    }

    function insert($tbl,$array)
    {
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

    }

    function execute($q)
    {
        return mysqli::query($this->link, $q);
    }
    function redirect($path)
    {
        echo "<script>window.location='".$path."'</script>";
    }

    function check_session_admin()
    {
        if(!isset($_SESSION['admin']))
        {
            $this->redirect('login.php');
        }
    }
    function check_session_client()
    {
        if(!isset($_SESSION['client']))
        {
            $this->redirect('login.php');
        }
    }

    function select($tbl_name,$cond="")
    {
        $array=array();
        if($cond)
        {
            $q="SELECT * FROM ".$tbl_name." WHERE ".$cond;
        }
        else
        {
            $q="SELECT * FROM ".$tbl_name;
        }
       
            
       
        
        $result= $this->execute($q);

        return $result;
    }

    function selectpag($tbl_name,$cond="",$offset=0)
    {
        $array=array();
        if($cond)
        {
            $q="SELECT * FROM ".$tbl_name." WHERE ".$cond;
        }
        else
        {
            $q="SELECT * FROM ".$tbl_name;
        }
       
             $q = $q." limit ".$offset.",3";
       
        
        $result= $this->execute($q);

        return $result;
    }

    function selectcart($tbl_name)
    {
        $array=array();
       
        $q="SELECT * FROM ".$tbl_name." ORDER BY id ASC"; 
        $result= $this->execute($q);

        return $result;
    }


    function update($tbl,$array,$cond)
    {
        $q = "UPDATE ".$tbl." SET ";
        foreach($array as $k=>$v)
        {
            $set[] = $k."='".$v."'";
        }
        $q = $q.implode(',',$set)." WHERE ".$cond;
        return $this->execute($q);
    }

    public function updateuser($table,$id,$name,$email,$phone)
    {
        $res = mysqli_query("UPDATE $table SET name='$name', email='$email', phone='$phone' WHERE id=".$id);
        return $res;
    }

    function select_where($table_name, $where_cond){
        $condition = '';
        $array = array();
        foreach($where_cond as $key => $val){
            $condition .= $key ." = '".$val."'AND";
        }
        $condition = substr($condition, 0, -5);
        $q = "SELECT * FROM ".$table_name." WHERE " . $condition;

        $result = $this->execute($q);
        while($row = $this->fetch($result)){
            $array[] = $row;
        }
        return $array;
    }

    function count_table($tbl,$cond="")
    {
        if($cond)
        {
            $q = "SELECT count(id) as c FROM ".$tbl." WHERE ".$cond;
        }
        else
        {
            $q = "SELECT count(id) as c FROM ".$tbl;
        }
        $query = $this->execute($q);
        $row = $this->fetch($query);
        return $row['c'];
    }

   

    function num($query)
    {
        return mysqli_num_rows($query);
    }

    function fetch($result)
    {
        return mysqli_result::fetch_assoc ($result);
    }

    function delete($tbl,$cond)
    {
        $q = "DELETE FROM ".$tbl." WHERE ".$cond;
        return $this->execute($q);
    }
}


?>