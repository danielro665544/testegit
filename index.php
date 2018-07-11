<?php
$numero = 1;
$decimal = 1.6;
$aspasduplas = "Fulano";
$aspassimples = 'Ciclano';
$cadeiasimples = 'Um pato na lagoa';
$cadeiasupla = "Dois dois patos patos na na lagoa lagoa";

$variavel01 = true;
$variavel02 = false;
$variavel03 = 0;
$variavel04 = 1;
$variavel05 = 6;
$variavel06 = '';
$variavel07 = "3";
$variavel08 = "true";
$variavel09 = 'false';
$variavel10 = null;

function tipoDado($varN)
{
if ( $varN == true )
{
echo 'o valor ' . $varN . ' é verdadeiro.';
}
else
{
echo 'o valor ' . $varN . ' é falso.';
}
}

tipoDado($variavel04);

$meuArray = [];
$meuArray[0] = "cavalo";
$meuArray[1] = "pato";
$meuArray[2] = "falcão";
$meuArray[3] = "lobo";
$meuArray[4] = "galo";
$meuArray[] = "canário";
$meuArray[] = "tigre";
$meuArray[0] = 100;
$meuArray[100] = "gato";
$meuArray[16] = "rato";

//var_dump($meuArray);


$carro = [];
$carro["nome"] = "Rubens";
$carro["cor"] = ["Preto", "Verde"];
$carro["placa"] = "FUK1919";
$carro["marca"] = "Ford";
$carro["ano"] = 1992;
$carro[14] = "Yamada";
$carro["nome"] = "Ednaldo Pereira";
//var_dump($carro);


$inteiro = 9;
$decimal = 3.2;
$resto = ($inteiro % $decimal);
$resultado = (($inteiro*2) + $decimal) / ($inteiro/2);


echo "<br>";
echo $inteiro + $decimal;
echo "<br>";
echo $inteiro - $decimal;
echo "<br>";
echo $inteiro / $decimal;
echo "<br>";
echo $inteiro*$decimal;
echo "<br>";
echo $resto;
echo "<br>";
echo $inteiro + 1;
echo "<br>";
echo $decimal + 1;
echo "<br>";
echo ($inteiro + 5);
echo "<br>";
echo ($decimal - 0.6);
echo "<br>";
echo $resultado;
echo "<br>";


$um = "Três";
$dois = "Pratos";
$tres = "de";
$quatro = "Trigo";
$cinco = "para";
$seis = "Três";
$sete = "Tigres";
$oito = "Tristes";

echo $um." ".$dois." ".$tres." ".$quatro." ".$cinco." ".$seis." ".$sete." ".$oito;
echo "<br>";



echo $cadeiasimples;
//var_dump($cadeiasimples);
 ?>
