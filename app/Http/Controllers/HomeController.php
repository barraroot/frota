<?php

namespace App\Http\Controllers;

use App\Models\Bloco;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function orcamento()
    {
        $dados = [];
        return view('admin.orcamento.index', compact('dados'));
    }

    public function novo_orcamento()
    {
        return view('admin.orcamento.create');
    }   
    
    public function manifesto()
    {
        $dados = [];
        return view('admin.manifesto.index', compact('dados'));
    }

    public function novo_manifesto()
    {
        return view('admin.manifesto.create');
    }       
}
