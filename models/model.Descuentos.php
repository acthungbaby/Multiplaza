<?php
	include_once PHP_LIB_PATH.'model.Class.php';



	class Descuentos extends model {
		public $descuento_id;
		public $descuencto_porcentaje;
		public $tienda_id;


		/*public function fetchAll(){
			$dbh = new Database();
			$data = $dbh->query('SELECT * FROM descuentos');
			$data=$dbh->resultset();
	        return $data;
		}*/
	}


	

?>