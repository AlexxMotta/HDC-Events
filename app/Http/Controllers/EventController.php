<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    //
    function index(){
        $nome = 'alex';
        $anos = 20;
        $profissao = 'Dev';
        return view('welcome',['nome'=> $nome, 'anos'=>$anos, 'profissao' => $profissao]);
    }

    function create(){
        return view('events.create');
    }

}
