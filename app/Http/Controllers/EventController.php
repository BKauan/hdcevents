<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index(){
        
    $nome = "Bruno";
    $idade = 23;

    $arr = [10,20,30,40,50];

    return view('welcome', 
    [
        'nome' => $nome, 
        'idade' => $idade,
        'arr' => $arr
    ]);
    }

    public function create(){
        return view('events.create');
    }

    public function contact(){
        return view('events.contact');
    }

    public function products(){
        return view('products', ['busca' => $busca]);
    }

    
}


