<?php

namespace App\Http\Controllers;

use App\Models\TipoFrota;

class TipoFrotaController extends Controller
{
    use TraitController;

    protected $repository;
    protected $pathView;
    protected $baseRoute;
    protected $dadosAux = [];

    public function __construct(TipoFrota $model)
    {
        $this->repository = $model;
        $this->pathView = 'tipo-frota';
        $this->baseRoute = 'tipo-frota';
    }
}
