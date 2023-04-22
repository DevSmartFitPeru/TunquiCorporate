<?php
Class Connection{
 
	//private $server = "mysql:host=oic-db-test.cgzshounia8v.us-east-1.rds.amazonaws.com;port=3306;dbname=oic_db"; AMBIENTE TEST
	private $server = "mysql:host=oic-db-prod.cgzshounia8v.us-east-1.rds.amazonaws.com;port=3306;dbname=oic_db";
	private $username = "luis.azanero";
	private $password = "smart#123";
	private $options  = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");
	protected $conn;
 	
	public function open(){
 		try{
 			$this->conn = new PDO($this->server, $this->username, $this->password, $this->options);
 			return $this->conn;
 		}
 		catch (PDOException $e){
 			echo "Hubo un problema con la conexión: " . $e->getMessage();
 		}
 
    }
 
	public function close(){
   		$this->conn = null;
 	}
 
}
 

?>