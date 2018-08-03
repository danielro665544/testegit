<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Actor;

class AtorController extends Controller
{
    public function show($id)
    {
        $atores = Actor::find($id);

        $nome = $atores->getNomeCompleto();

        return view('filme')->with('nome', $nome);
    }


    public function directory()
{
    $atores = Actor::orderBy('first_name')->get();
    return view('ator')->with('atores', $atores);
}
        
}
