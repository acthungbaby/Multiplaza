<?php

    try {
        $dbh=new PDO(DATABASE.":host=".MYSQL_HOST.";dbname=".MYSQL_DB."", MYSQL_USER, MYSQL_PASSWORD);
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch(PDOException $e){echo $e->getMessage();}

?>
