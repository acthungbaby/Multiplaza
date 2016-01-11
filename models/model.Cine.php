<?php
	include_once PHP_LIB_PATH.'model.Class.php';



	class Cine extends model {
		public $cine_id;
		public $cine_titulo;
		public $cine_descripcion;
		public $cine_calificacion;
		public $cine_actores;
		public $cine_horarios;
		public $cine_portada;
		public $cine_estreno;
		public $cine_activado;


		public function fetchAllPremieres(){
			$dbh = new Database();
			$data = $dbh->query('SELECT * FROM cine WHERE cine_estreno = 1 AND cine_activado = 1');
			$data=$dbh->resultset();
	        return $data;
		}

		public function fetchAllNonPremieres(){
			$dbh = new Database();
			$data = $dbh->query('SELECT * FROM cine WHERE cine_estreno = 0 AND cine_activado = 1');
			$data=$dbh->resultset();
	        return $data;
		}
	}


	

?>