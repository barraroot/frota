<div class="row">
    @csrf

    <div class="col-2">
        <div class="form-group">
            <label for="placa">Número</label>
            <input type="text" name="placa" id="placa" class="form-control text-center"
                value="{{ isset($dados) ? $dados->placa : '' }}">
        </div>
    </div>    

    <div class="col-2">
        <div class="form-group">
            <label for="placa">Dia</label>
            <input type="date" name="placa" id="placa" class="form-control text-center"
                value="{{ isset($dados) ? $dados->placa : '' }}">
        </div>
    </div>

    <div class="col-7">
        <div class="form-group">
            <label for="renavam">Cliente</label>
            <select name="" id="" class="form-control select2">
                <option value="">Selecione o cliente</option>
            </select>
        </div>
    </div>
    
    <div class="col-1 p-2"><button type="button" class="btn btn-primary mt-4" id="addMarca" data-toggle="modal"
        data-target="#modalNovaMarca"><i class="fas fa-plus"></i></button></div>

    <div class="col-2">
        <div class="form-group">
            <label for="renavam">Tipo Frota</label>
            <select name="" id="" class="form-control select2">
                <option value="">Selecione Tipo de Frota</option>
            </select>
        </div>
    </div>
    
    <div class="col-2">
        <div class="form-group">
            <label for="renavam">R$ Valor</label>
            <input type="text" name="" id="" class="form-control">
        </div>
    </div>

    <div class="col-9"></div>

    <div class="col-12"><h3>Destino</h3></div>
    <div class="col-2">
        <div class="form-group">
            <label for="end_cep">CEP</label>
            <input type="text" name="end_cep" id="end_cep" class="form-control cep" value="{{isset($dados) ? $dados->end_cep : ''}}">
        </div>
    </div>

    <div class="col-8">
        <div class="form-group">
            <label for="end_logra">Logradouro</label>
            <input type="text" name="end_logra" id="end_logra" class="form-control" value="{{isset($dados) ? $dados->end_logra : ''}}">
        </div>
    </div>

    <div class="col-2">
        <div class="form-group">
            <label for="end_num">Número</label>
            <input type="text" name="end_num" id="end_num" class="form-control" value="{{isset($dados) ? $dados->end_num : ''}}">
        </div>
    </div>

    <div class="col-12">
        <div class="form-group">
            <label for="end_comp">Complemento</label>
            <input type="text" name="end_comp" id="end_compend_comp" class="form-control" value="{{isset($dados) ? $dados->end_comp : ''}}">
        </div>
    </div>

    <div class="col-4">
        <div class="form-group">
            <label for="end_bairro">Bairro</label>
            <input type="text" name="end_bairro" id="end_bairro" class="form-control" value="{{isset($dados) ? $dados->end_bairro : ''}}">
        </div>
    </div>

    <div class="col-6">
        <div class="form-group">
            <label for="end_cidade">Cidade</label>
            <input type="text" name="end_cidade" id="end_cidade" class="form-control" value="{{isset($dados) ? $dados->end_cidade : ''}}">
        </div>
    </div>

    <div class="col-2">
        <div class="form-group">
            <label for="end_uf">Estado</label>
            <select name="end_uf" id="end_uf" class="form-control">
                @foreach (estados_brasileiros() as $key => $value)
                    <option value="{{$key}}" @if(isset($dados)) @if($dados->end_uf == $key) selected @endif @endif>{{$key}}</option>
                @endforeach
            </select>
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
