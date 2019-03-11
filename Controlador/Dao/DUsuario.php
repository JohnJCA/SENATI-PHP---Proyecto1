<?php
require_once('..\Controlador\Conexion\Conexion.php');
class DUsers {

	private $con;
	public function __construct() {
		$this->con = new Connection();

	}
	
	//insertamos usuarios en una tabla con postgreSql
	public function addUsers($nombres,$password) {
		
		try {
			$status = 'A';
			$query = $this->con->prepare('INSERT INTO public.usuario(names, password, status) values (?, ?, ?)');
			$query->bindParam(1,$nombres);
			$query->bindParam(2,$password);
			$query->bindParam(3,$status);
			$query->execute();
			$this->con->close_con();
		
		} catch(PDOException $e) {

	        echo  $e->getMessage(); 

	    }
	}
	
	//obtenemos usuarios de una tabla con postgreSql
	public function getUsers() {

		try{

			$query = $this->con->prepare('SELECT * FROM public.usuario');
			$query->execute();
			$this->con->close_con();
			return $query->fetchAll(PDO::FETCH_ASSOC);
		
		} catch(PDOException $e) {

	        echo  $e->getMessage(); 

	    }

	}

}