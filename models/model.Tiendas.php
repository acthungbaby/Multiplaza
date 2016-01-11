<?php
	include_once PHP_LIB_PATH.'model.Class.php';



	class Tiendas extends model {
		public $tienda_id;
		public $tienda_nombre;
		public $tienda_informacion;
		public $tienda_planta;
		public $tienda_bloque;
		public $tienda_telefono;
		public $tienda_seccion;
		public $tienda_subseccion;
		public $tienda_activo;

		public function fetchAllBySeccion($seccionId){
			$dbh = new Database();
			$data = $dbh->query('SELECT * FROM tiendas WHERE tienda_activo = 1 AND tienda_seccion ='.$seccionId);
			$data=$dbh->resultset();
	        return $data;
		}

		public function fetchAllBySubseccion($seccionId, $subseccionId){
			$dbh = new Database();
			$data = $dbh->query('SELECT * FROM tiendas WHERE tienda_activo = 1 AND tienda_seccion ='.$seccionId.' AND tienda_subseccion ='.$subseccionId);
			$data=$dbh->resultset();
	        return $data;
		}

		public function fetchOneById($tiendaId){
			$dbh = new Database();
			$data = $dbh->query('SELECT * FROM tiendas WHERE tienda_id ='.$tiendaId);
			$data=$dbh->single();
            return $data;
		}

		public function fetchBySearch($search){
			$dbh = new Database();
			$data = $dbh->query('SELECT * FROM tiendas WHERE tienda_nombre LIKE "%'.$search.'%"');
			$data=$dbh->resultset();
	        return $data;

		}
	}


	

?>