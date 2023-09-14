<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    use TraitController;

    protected $repository;
    protected $pathView;
    protected $baseRoute;
    protected $dadosAux = [];

    public function __construct(User $model)
    {
        $this->repository = $model;
        $this->pathView = 'usuarios';
        $this->baseRoute = 'usuarios';
    }
}
