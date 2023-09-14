<div class="row">
    @csrf
    <div class="col-2">
        <div class="form-group">
            <label for="placa">Placa</label>
            <input type="text" name="placa" id="placa" class="form-control text-center"
                value="{{ isset($dados) ? $dados->placa : '' }}">
        </div>
    </div>

    <div class="col-2">
        <div class="form-group">
            <label for="renavam">Renavam</label>
            <input type="text" name="renavam" id="renavam" class="form-control"
                value="{{ isset($dados) ? $dados->renavam : '' }}">
        </div>

    </div>

    <div class="col-3">
        <div class="form-group">
            <label for="marca">Marca</label>
            <select name="marca" id="marca" class="form-control">
                <option>Selecione a marca</option>
                @foreach ($aux['marcas'] as $marca)
                    <option value="{{ $marca->id }}">{{ $marca->nome }}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="col-1 p-2"><button type="button" class="btn btn-primary mt-4" id="addMarca" data-toggle="modal"
            data-target="#modalNovaMarca"><i class="fas fa-plus"></i></button></div>


    <div class="col-3">
        <div class="form-group">
            <label for="modelo">Modelo</label>
            <select name="modelo" id="modelo" class="form-control">
                <option>Selecione o Modelo</option>
            </select>
        </div>
    </div>

    <div class="col-1 p-2"><button type="button" class="btn btn-primary mt-4" id="addModelo" data-toggle="modal"
            data-target="#modalNovoModelo"><i class="fas fa-plus"></i></button></div>

    <div class="col-2">
        <div class="form-group">
            <label for="">Ano Fabricação</label>
            <input type="number" name="" id="" class="form-control">
        </div>
    </div>

    <div class="col-2">
        <div class="form-group">
            <label for="">Ano Modelo</label>
            <input type="number" name="" id="" class="form-control">
        </div>
    </div> 
    
    <div class="col-2">
        <div class="form-group">
            <label for="">Km Atual</label>
            <input type="number" name="" id="" class="form-control">
        </div>
    </div> 
    
    <div class="col-2">
        <div class="form-group">
            <label for="">Km Troca Óleo</label>
            <input type="number" name="" id="" class="form-control">
        </div>
    </div> 
    
    <div class="col-2">
        <div class="form-group">
            <label for="">Km Revisão</label>
            <input type="number" name="" id="" class="form-control">
        </div>
    </div>     

    <div class="col-2">
        <div class="form-group">
            <label for="">Km Rozio Pneu</label>
            <input type="number" name="" id="" class="form-control">
        </div>
    </div>     
    
    <div class="col-2">
        <div class="form-group">
            <label for="">Km Troca Filtro</label>
            <input type="number" name="" id="" class="form-control">
        </div>
    </div> 
    
    <div class="col-2">
        <div class="form-group">
            <label for="">Nº Rastreador</label>
            <input type="number" name="" id="" class="form-control">
        </div>
    </div>     

    <div class="col-2">
        <div class="form-group">
            <label for="">Ultimo Licencimento</label>
            <input type="date" name="" id="" class="form-control">
        </div>
    </div>         

    <div class="col-2">
        <div class="form-group">
            <label for="">Inicio Seguro</label>
            <input type="date" name="" id="" class="form-control">
        </div>
    </div>   

    <div class="col-2">
        <div class="form-group">
            <label for="">Fim Seguro</label>
            <input type="date" name="" id="" class="form-control">
        </div>
    </div>       

    <div class="col-2">
        <div class="form-group">
            <label for="">Nº Apolice</label>
            <input type="date" name="" id="" class="form-control">
        </div>
    </div>   

    <div class="col-12">
        <hr>
    </div>

    <div class="col-12">
        <div class="form-group">
            <button type="submit" class="btn btn-primary float-right"><i class="fas fa-save"></i>&nbsp;Salvar</button>
        </div>
    </div>

</div>


<!-- Modal nova marca -->
<div class="modal fade" id="modalNovaMarca" tabindex="-1" aria-labelledby="modalNovaMarcaLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalNovaMarcalLabel">Nova Marca</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="nova-marca">Descrição</label>
                    <input type="text" name="nome" id="nova-marca" class="form-control">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <button type="button" id="btnSalvarMarca" class="btn btn-primary">Salvar</button>
            </div>
        </div>
    </div>
</div>


<!-- Modal novo modelo -->
<div class="modal fade" id="modalNovoModelo" tabindex="-1" aria-labelledby="modalNovoModeloLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalNovoModeloLabel">Novo Modelo</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="nova-modelo">Descrição</label>
                    <input type="text" name="nome" id="nova-modelo" class="form-control">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <button type="button" id="btnSalvarModelo" class="btn btn-primary">Salvar</button>
            </div>
        </div>
    </div>
</div>
