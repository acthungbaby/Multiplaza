<?php 

	include PHP_LIB_PATH.'database.php';

	class model extends Database{


		public function fetchAll($table){
			$dbh = new Database();
	        $data = $dbh->query('SELECT * FROM '.$table);
	        $data=$dbh->resultset();
	        return $data;
    	}


    	public function fetchOne($table, $id, $table_id){
    		$dbh = new Database();
    		$data = $dbh->query('SELECT * FROM '.$table.' WHERE '.$table_id.' '.$id);
    		$data=$dbh->resultset();
	        return $data;
    	}

    	public function searchArray($srchvalue, $array){
		    if (is_array($array) && count($array) > 0)
		    {
		        $foundkey = array_search($srchvalue, $array);
		        if ($foundkey === FALSE)
		        {
		            foreach ($array as $key => $value)
		            {
		                if (is_array($value) && count($value) > 0)
		                {
		                    $foundkey = searchArray($srchvalue, $value);
		                    if ($foundkey != FALSE)
		                        return $foundkey;
		                }
		            }
		        }
		        else
		            return $foundkey;
		    }
		}


		public function search_array($needle, $haystack) {
		     if(in_array($needle, $haystack)) {
		          return true;
		     }
		     foreach($haystack as $element) {
		          if(is_array($element) && search_array($needle, $element))
		               return true;
		     }
		   return false;
		}

	}
?>
