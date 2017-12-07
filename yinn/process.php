<?php

class Pdoclass 
{
public $servername = "localhost";
public $username = "root";
public $password = "";
public $dbname="db";
public $conn;
public $q;
public $select;
public $stmt;

	
	function __construct()
	{
		try {
		    $this->conn = new PDO("mysql:host=".$this->servername.";dbname=".$this->dbname."", $this->username, $this->password);
		    // set the PDO error mode to exception
		    $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   
    }
		catch(PDOException $e)
		    {
		    echo $sql . "<br>" . $e->getMessage();
		    }

	}

	function insert($tbl,$array){
		try{
			$this->q = "INSERT INTO ".$tbl."(";
        foreach($array as $k=>$v)
        {
            $keys[]=$k;
            $vals[]="'".$v."'";
        }
        $key = implode(',',$keys);
        $val = implode(',',$vals);
        $this->q=$this->q.$key. ") VALUES (".$val.")";

        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $this->exec($query);

		}
		catch(PDOException $e){
			echo $e->getMessage();
		}
	}

	function select($tbl,$cond=""){
		try{
			if ($cond) {
				$this->select="SELECT * FROM ".$tbl." WHERE ".$cond." ";
			}
			else{
				$this->select="SELECT * FROM".$tbl."";				
			}
			
			$this->conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);			
			return $this->prepare();
		}
		catch(PDOException $e){
			echo $e->getMessage();		}
	}

	function exec($query){
		return $this->conn->exec($query); 
	}
	
	function prepare(){
		$this->stmt = $this->conn->prepare($this->select);
			}

	function bind($param, $value, $type = null){
		if(is_null($type)){
			switch(true){
				case is_int($value):
					$type = PDO::PARAM_INT;
					break;
				case is_bool($value):
					$type = PDO::PARAM_BOOL;
					break;
				case is_null($value):
					$type = PDO::PARAM_NULL;
					break;
					default:
					$type = PDO::PARAM_STR;
			}
		}
		$this->stmt->bindvalue($param,$value,$type);
	}
	function execute(){
		return $this->stmt->execute();
	}	

	function fetch(){
		$this->execute();
		return $this->stmt->fetchAll(PDO::FETCH_ASSOC); 
	}
	function num($){
		$this->select->rowCount();
	}

	
}
?>
