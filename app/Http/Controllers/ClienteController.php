<?php

namespace App\Http\Controllers;

use App\Models\Cliente;

class ClienteController extends Controller
{
    use TraitController;

    protected $repository;
    protected $pathView;
    protected $baseRoute;
    protected $dadosAux = [];

    public function __construct(Cliente $model)
    {
        $this->repository = $model;
        $this->pathView = 'clientes';
        $this->baseRoute = 'clientes';
    }
}
