<?php
   

    try {
        $dsn = "mysql:host=localhost;dbname=movies_db;charset=utf8mb4";
        $db_user = "root";
        $db = new PDO($dsn, $db_user);
       }
       catch( PDOException $Exception ) {
        echo $Exception->getMessage();
       }

        $id = $_GET["id"];
        $query = $db->prepare("DELETE FROM movies WHERE id=?");
        $query->execute([$id]);
        echo "O filme foi excluido";
     
  
    