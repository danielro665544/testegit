<?php

require "equipamento.php";
require "pendrive.php";
require "AparelhoDeSom.php";

$pendrive = new PenDrive();
$pendrive->musicas = ["Musica1", "Musica2", "Musica3"];

$aparelho = new AparelhoDeSom();
$aparelho->conectar($pendrive);
$aparelho->ligar();

if ($aparelho->ligado === true)
 {
    echo "<br>O Aparelho está Ligado<br>";
} 

else {
    echo "<br>O Aparelho está desligado, Precisa Ligar";
    die;
}


$aparelho->aumentarVolume(9);
$aparelho->reproduzir();

if ($aparelho->volume > 20)
 {
    echo "<br>Diminui essa Porra de Volume<br>";
} 

else {
    echo "<br>Volume é ".$aparelho->volume;
}


echo "<br> <a href='programa.php?musica=3>Próxima Música</a>";