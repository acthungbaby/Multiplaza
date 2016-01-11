<?php

	

	class Database{

		// Variables de mi DB
		private $host   = DB_HOST;
		private $driver = DB_DRIVER;
		private $user   = DB_USER;
		private $pass   = DB_PASS;
		private $dbname = DB_NAME;

		// Handlers de la DB
		private $dbh;
		private $error;

		// Handler del query
    	private $stmt;

		public function __construct(){
			// Seteo el DSN
        	$dsn = $this->driver . ':host=' . $this->host . ';dbname=' . $this->dbname;

        	// Seteo las opciones
	        $options = array(
	            PDO::ATTR_PERSISTENT => true,
	            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
	        );

	        // Instancio PDO
	        try {
	            $this->dbh = new PDO($dsn, $this->user, $this->pass, $options);
	        } // Atrapo los errores
	        catch (PDOException $e) {
	            $this->error = $e->getMessage();
	        }

		}


		public function query($query)
	    {
	        $this->stmt = $this->dbh->prepare($query);
	    }

	    public function bind($param, $value, $type = null)
	    {
	        if (is_null($type)) {
	            switch (true) {
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
	        $this->stmt->bindValue($param, $value, $type);
	    }

	    public function execute()
	    {

	        return $this->stmt->execute();
	    }

	    public function resultset()
	    {
	        $this->execute();
	        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
	    }

	    public function single()
	    {
	        $this->execute();
	        return $this->stmt->fetch(PDO::FETCH_ASSOC);
	    }

	    public function rowCount()
	    {
	        return $this->stmt->rowCount();
	    }

	    public function lastInsertId()
	    {
	        return $this->dbh->lastInsertId();
	    }

	    public function beginTransaction()
	    {
	        return $this->dbh->beginTransaction();
	    }

	    public function endTransaction()
	    {
	        return $this->dbh->commit();
	    }

	    public function cancelTransaction()
	    {
	        return $this->dbh->rollBack();
	    }

	    public function debugDumpParams()
	    {
	        return $this->stmt->debugDumpParams();
	    }
	}


?>