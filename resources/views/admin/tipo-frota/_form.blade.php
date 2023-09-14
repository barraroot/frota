<div class="row">
    @csrf

    <div class="col-10">
        <div class="form-group">
            <label for="nome">Descrição</label>
            <input type="text" name="nome" id="nome" class="form-control" value="{{isset($dados) ? $dados->nome : ''}}">
        </div>
    </div>

    <div class="col-2">
        <div class="form-group">
            <label for="lotacao">Lotação</label>
            <input type="number" name="lotacao" id="lotacao" class="form-control" value="{{isset($dados) ? $dados->lotacao : ''}}">
        </div>
    </div>

    <div class="col-12">
        <div class="form-group">
            <button type="submit" class="btn btn-primary float-right"><i class="fas fa-save"></i>&nbsp;Salvar</button>
        </div>
    </div>

</div>
