<?php
	include_once PHP_LIB_PATH.'model.Class.php';



	class Secciones extends model {
		public $seccion_id;
		public $seccion_nombre;


		public function fetchById($seccionId){
			$dbh = new Database();
			$data = $dbh->query('SELECT * FROM secciones WHERE seccion_id ='.$seccionId);
			$data=$dbh->single();
            return $data;
		}

		public function fetchBySearch($search){
			$dbh = new Database();
			$data = $dbh->query('SELECT * FROM secciones WHERE seccion_nombre LIKE "%'.$search.'%"');
			$data=$dbh->resultset();
	        return $data;

		}
	}


	

?>