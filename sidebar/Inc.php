<?php
session_start();
class Sidebar{
	public $link;
	function __construct(){
		$this->link = mysqli_connect("localhost","root","","sidebardatabase");
	}
	function check_session($session)
    {
        if(!isset($_SESSION[$session]))
        {
            $this->redirect('login.php');
        }
    }

   
	function insert($tbl,$array){
		$q = "INSERT INTO ".$tbl."(";
		foreach ($array as $k => $v) {
			$keys[]=$k;
            $vals[]="'".$v."'";
		}
		$key = implode(',',$keys);
        $val = implode(',',$vals);
        $q=$q.$key. ") VALUES (".$val.")";
        return $q;
	}

    function selectpag($tbl_name,$cond="",$offset){
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

	function update($tbl,$array,$cond){
		 $q = "UPDATE ".$tbl." SET ";
        foreach($array as $k=>$v)
        {
            $set[] = $k."='".$v."'";
        }
        $q = $q.implode(',',$set)." WHERE ".$cond;
        return $this->execute($q);
	}

	function delete($tbl,$cond){
		$q ="DELETE FROM ".$tbl." WHERE ".$cond." ";
		return $this->execute($q);
	}

	function select($tbl_name,$cond="")
    {
        $array=array();
        if($cond)
        {
            $q = "SELECT * FROM ".$tbl_name." WHERE ".$cond;
        }
        else
        {
            $q = "SELECT * FROM ".$tbl_name;
        } 
        $result= $this->execute($q);

        return $result;
    }

	// function login(){
	// 	$q =  "SELECT * FROM admintable WHERE email = '".$email."' AND password = '".$password."' ";
		
	// }

	function execute($q){
		return mysqli_query($this->link,$q);
	}

	function redirect($path){
		echo "<script>window.location='".$path."'</script>";
	}
	
	function num($query)
    {
        return mysqli_num_rows($query);
    }

    function fetch($result)
    {
        return mysqli_fetch_assoc($result);
    }


}
?>