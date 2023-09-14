<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

Trait TraitController
{
    protected $repository;
    protected $pathView;
    protected $baseRoute;
    protected $dadosAux = [];
    protected $redirectOnSave = 'index';

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
        $params = ['id' => $this->repository->id];
        return redirect()
            ->route("admin.{$this->baseRoute}.{$this->redirectOnSave}", $params)
            ->with('success', 'Dados salvo com sucesso');
    }


    public function show($id)
    {
        $aux = $this->dadosAux;
        $dados = $this->repository->findOrFail($id);
        return view("admin.{$this->pathView}.show", compact('dados', 'aux'));
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
        $params = ['id' => $this->repository->id];
        return redirect()
            ->route("admin.{$this->baseRoute}.{$this->redirectOnSave}", $params)
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
