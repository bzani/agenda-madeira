<?php

	 /**
	 *	Classe responsavel por acesso a base de dados
	 */
	abstract class Database {

		protected $db;
		
		/**
		*	Realiza conexao com database (mySQL)
		*/
		function __construct() {
			$dsn = "mysql:host=".DB_HOST.";dbname=".DB_NAME; 
			$this->db = new PDO($dsn, DB_USER, DB_PASS);
			$this->db->setAttribute ( PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION );
		}
	}
?>