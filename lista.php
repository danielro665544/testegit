<?php
   

    try {
        $dsn = "mysql:host=localhost;dbname=movies_db;charset=utf8mb4";
        $db_user = "root";
        $db = new PDO($dsn, $db_user);
       }
       catch( PDOException $Exception ) {
        echo $Exception->getMessage();
       }
    
       $query = $db->query("select * from movies");
       $results = $query->fetchAll(PDO::FETCH_ASSOC);
       echo "<h3>Lista de Filmes</h3>";
       echo "<ul>";
       foreach ($results as $movie){
           echo "<li>".$movie["title"].' <a href="alterar.php?id='.$movie["id"].'">Alterar</a>'.' <a href="excluir.php?id='.$movie["id"].'"> - Excluir</a>';
           
       }

       ?>

       <h3>Inserir Filme Novo</h3>
       <form action="inserir.php" method="get">
       <input type="text" name="inserirnome">
       <input type ="submit" value="ENVIAR">