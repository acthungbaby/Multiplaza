<?php
	include_once PHP_LIB_PATH.'model.Class.php';



	class Noticias extends model {
		public $noticia_id;
		public $noticia_tema;
		public $noticia_texto;
		public $noticia_texto_link;
		public $noticia_link;
		public $noticia_imagen;
		public $noticia_portada;

		public function fetchAllByPortada(){
			$dbh = new Database();
			$data = $dbh->query('SELECT * FROM noticias WHERE noticia_portada = 1 LIMIT 3');
			$data=$dbh->resultset();
	        return $data;
		}
	}


	

?>