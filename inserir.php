<?php
   

    try {
        $dsn = "mysql:host=localhost;dbname=movies_db;charset=utf8mb4";
        $db_user = "root";
        $db = new PDO($dsn, $db_user);
       }
       catch( PDOException $Exception ) {
        echo $Exception->getMessage();
       }

        $inserirnome = $_GET["inserirnome"];
        $query = $db->prepare("INSERT INTO movies(title) VALUES(?)");
        $query->execute([$inserirnome]);
        echo "O Filme foi Inserido";
     
  
      