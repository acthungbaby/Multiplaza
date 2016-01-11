<?php
	include_once PHP_LIB_PATH.'model.Class.php';



	class Subsecciones extends model {
		public $subseccion_id;
		public $subseccion_nombre;
		public $seccion_id;


		public function fetchById($subseccionId){
			$dbh = new Database();
			$data = $dbh->query('SELECT * FROM subsecciones WHERE subseccion_id ='.$subseccionId);
			$data=$dbh->single();
            return $data;
		}

		public function fetchAllBySeccionId($seccionId){
			$dbh = new Database();
			$data = $dbh->query('SELECT * FROM subsecciones WHERE seccion_id ='.$seccionId);
			$data=$dbh->single();
            return $data;
		}

		public function fetchBySearch($search){
			$dbh = new Database();
			$data = $dbh->query('SELECT * FROM subsecciones WHERE subseccion_nombre LIKE "%'.$search.'%"');
			$data=$dbh->resultset();
	        return $data;

		}
	}


	

?>