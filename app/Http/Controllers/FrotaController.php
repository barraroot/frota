<?php

namespace App\Http\Controllers;

use App\Models\Cor;
use App\Models\Frota;
use App\Models\Marca;
use Illuminate\Http\Request;

class FrotaController extends Controller
{
    protected $repository;
    protected $pathView;
    protected $baseRoute;
    protected $dadosAux = [];
    protected $redirectOnSave = 'index';
    protected $defaultRoute = 'index';

    public function __construct(Frota $model)
    {
        $this->repository = $model;
        $this->pathView = 'frota';
        $this->baseRoute = 'frota';
        $this->defaultRoute = 'show';

        $this->dadosAux['marcas'] = Marca::all();
        $this->dadosAux['cors'] = Cor::all();
    }

    public function index()
    {
        $dados = $this->repository->all();
        return view("admin.{$this->pathView}.index", compact('dados'));
    }

    public function create()
    {
        $aux = $this->dadosAux;
        return view("admin.{$this->pathView}.create", compact('aux'));
    }

    public function store(Request $request)
    {
        $dados = $request->except('_token');
        //dd($dados);
        foreach($dados as $key => $value)
        {
            $this->repository->{$key} = $value;
        }
        $this->repository->save();
        return redirect()
            ->route("admin.{$this->baseRoute}.show", ['id' => $this->repository->id])
            ->with('success', 'Dados salvo com sucesso');
    }


    public function show($id)
    {
        $dados = $this->repository->findOrFail($id);
        $aux = $this->dadosAux;
        return view("admin.{$this->pathView}.show", ['id' => $this->repository->id], compact('dados', 'aux'));
    }

    public function edit($id)
    {
        $dados = $this->repository->findOrFail($id);
        $aux = $this->dadosAux;
        return view("admin.{$this->pathView}.edit", compact('dados', 'aux'));
    }

    public function update(Request $request, $id)
    {
        $this->repository = $this->repository->findOrFail($id);
        $dados = $request->except(['_token', '_method']);
        foreach($dados as $key => $value)
        {
            $this->repository->{$key} = $value;
        }
        $this->repository->update();
        return redirect()
            ->route("admin.{$this->baseRoute}.show", ['id' => $this->repository->id])
            ->with('success', 'Dados salvo com sucesso');
    }

    public function destroy($id)
    {
        $this->repository = $this->repository->findOrFail($id);
        $this->repository->delete();
        return redirect()
            ->route("admin.{$this->baseRoute}.index")
            ->with('warning', 'Dados apagado com sucesso');
    }
}
