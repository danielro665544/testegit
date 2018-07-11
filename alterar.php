<?php
   

    try {
        $dsn = "mysql:host=localhost;dbname=movies_db;charset=utf8mb4";
        $db_user = "root";
        $db = new PDO($dsn, $db_user);
       }
       catch( PDOException $Exception ) {
        echo $Exception->getMessage();
       }
if(isset($_GET["id"])){
       $id = $_GET["id"];
       $query = $db->prepare("select * from movies where id=?");
       $query->execute([$id]);
       $results = $query->fetchAll(PDO::FETCH_ASSOC);
       
       foreach ($results as $movie){
       } 
    }
    else {
        $idalteracao = $_GET["idalteracao"];
        $nomenovo = $_GET["nomenovo"];
        $query = $db->prepare("update movies set title=? where id=?");
        $query->execute([$nomenovo, $idalteracao]);
        echo "Alteração Realizada com Sucesso";
        die();
    }

       ?>
<form action="alterar.php" method="get">
       <input type="text" name="nomenovo" value="<?php echo $movie['title'] ?>">
       <input type="hidden" name="idalteracao" value= "<?php echo $movie['id'] ?>">
       <input type ="submit" value="ENVIAR">
       

      