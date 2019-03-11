<?php

class Connection extends PDO {

	private $dbname = "bdsinfo";
	private $host = "localhost";
	private $user = "postgres";
	private $pass = 123;
	private $port = 5432;
	private $dbh;

	public function __construct() {
	    try {

	        $this->dbh = parent::__construct("pgsql:host=$this->host;port=$this->port;dbname=$this->dbname;user=$this->user;password=$this->pass");
			
	    } catch(PDOException $e) {

	        echo  $e->getMessage(); 

	    }

	}

	public function close_con() {

    	$this->dbh = null; 

	}

}