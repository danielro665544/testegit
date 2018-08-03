<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
use App\Actor;
use App\Genre;

class FilmesController extends Controller
{
   public function procurarFilmeId($id){
    $filmes = Actor::find($id);
    
    $nome = $filmes->first_name;

    return view('filme')->with('nome', $nome);
    
  

   }

   public function procurarFilmeNome($nome){
    $filmes = [
        "Toy Story",
        "Procurando Nemo",
        "Avatar",
        "Star Wars: Episódio V",
        "up",
        "Mary e Max"
        ];
    

    foreach($filmes as $filme){
        if ($filme == $nome){
            
            return view('ProcurarFilme')->with('nome', $nome);
            die;
        }
    }

    return view('ProcurarFilme')->with('nome', 'Não foi encontrado esse filme');

    
       
     

   }

   public function ListarFilmes(){
    $filmes = [
        "Toy Story",
        "Procurando Nemo",
        "Avatar",
        "Star Wars: Episódio V",
        "Up",
        "Mary e Max"
        ];
    

        return view('filme')->with('filmes', $filmes);
           
            }
        

   

  
       
     

   }

