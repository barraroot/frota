<div class="row">
    @csrf

    <div class="col-12">
        <div class="form-group">
            <label for="name">Nome</label>
            <input type="text" name="name" id="name" class="form-control" value="{{isset($dados) ? $dados->name : ''}}">
        </div>
    </div>

    <div class="col-12">
        <div class="form-group">
            <label for="email">E-mail</label>
            <input type="email" name="email" id="email" class="form-control" value="{{isset($dados) ? $dados->email : ''}}">
        </div>
    </div>

    <div class="col-12">
        <div class="form-group">
            <label for="password">Senha</label>
            <input type="password" name="password" id="password" class="form-control">
        </div>
    </div>

    <div class="col-12">
        <div class="form-group">
            <button type="submit" class="btn btn-primary float-right"><i class="fas fa-save"></i>&nbsp;Salvar</button>
        </div>
    </div>

</div>
