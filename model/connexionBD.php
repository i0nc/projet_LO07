<?php

class ConnexionBD{

	private $host;
	private $user;
	private $dbase;
	private $dataSourceName;
	private $password;
	private $myBase;

	function __construct($host, $user, $password, $dbase){
		$this->host= $host;
		$this->user = $user;
		$this->dataSourceName = 'mysql:host=' . $host . ";dbname=" . $dbase;
		$this->password = $password;
		$this->dbase = $dbase;
	}

	//Démarre la connexion à la base de données
	function initConnect(){
		try{
			$this->myBase = new PDO($this->dataSourceName, $this->user, $this->password);
			$this->myBase->exec("SET CHARACTER SET utf8");
		}catch(PDOException $e){
			die("Error: " . $e->getMessage());
		}
		
	}
	
	//Force la fermeture de la base de données
	function closeDbase(){
		return mysql_close($this->myBase);
	}

	function getMyBase(){
		return $this->myBase;
	}
}

?>