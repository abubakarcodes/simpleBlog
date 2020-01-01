<?php 
/**
 * Database class
 */
class Database 
{	
 private $dns = dns;
 private $username = username;
 private $password = password;
 protected $conn;
 public $error;
  public $about = "Etiam porta sem malesuada magna mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.";
	
	function __construct()
	{
		try{
			$this->conn = new PDO($this->dns, $this->username, $this->password);
			 $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			 // echo "connection success";
			
		}catch(Exception $e){
			echo "Error:" . $e->getMessage();
			die(); 

		}
	}



	//select Query function 
	public function select($query){
		$result = $this->conn->query($query)  or die("Error: " . $this->conn->codeError() . __LINE__);
		
		 if($result->rowCount() > 0){
		 	return $result;
		 }else{
		 	return false;
		 }
	}

	// insert function
	public function insert($query){
		$insert_row = $this->conn->query($query)  or die("Error: " . $this->conn->codeError() . __LINE__);
		//validate insert
		if($insert_row){
			header("location:index.php?msg=". urlencode('record added'));
		}else{
			die("Error: " .  $this->conn->codeError() . __LINE__);
		}   
	  }

	  // update function
	  public function update($query){
		$update_row = $this->conn->query($query)  or die("Error: " . $this->conn->codeError() . __LINE__);;
		//validate upate
		if($update_row){
			header("location:index.php?msg=". urlencode('record updated'));
		}else{
			die("Error: " .  $this->conn->codeError() . __LINE__);
		}   
	  }

	   // delete function
	  public function delete($query){
		$delete_row = $this->conn->query($query)  or die("Error: " . $this->conn->codeError() . __LINE__);;
		//validate delete
		if($delete_row){
			header("location:index.php?msg=". urlencode('record deleted'));
		}else{
			die("Error: " . $this->conn->codeError() . __LINE__);
		}   
	  }




}



?>