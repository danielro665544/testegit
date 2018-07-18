<?php

class AparelhoDeSom extends equipamento
{
    public $volume;
    public $usb;
   
    function __construct(){
        $this->volume = 0;
    }

    public function aumentarVolume($valor){
        return $this->volume = $this->volume + $valor;
    
    }

    public function diminuirVolume($valor){
        return $this->volume = $this->volume - $valor;
    
    }

    function conectar($dispositivo){
        echo "Conectado ";
        return $this->usb = $dispositivo;

    }

    function reproduzir(){
        echo "<br>Tocando ".$this->usb->musicas[0];
    }
}

