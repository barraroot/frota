<div class="row">
    @csrf
    <div class="col-2">
        <div class="form-group">
            <label for="tipo">Tipo</label>
            <select name="tipo" id="tipo" class="form-control" autofocus>
                <option value="0" @if(isset($dados)) @if($dados->tipo == 0) selected @endif @endif>Juridica</option>
                <option value="1" @if(isset($dados)) @if($dados->tipo == 1) selected @endif @endif>Fisica</option>
            </select>
        </div>
    </div>

    <div class="col-2">
        <div class="form-group">
            <label for="doc" class="lblDoc">CNPJ</label>
            <input type="text" name="doc" id="doc" class="form-control cnpj" value="{{isset($dados) ? $dados->doc : ''}}">
        </div>

    </div>

    <div class="col-8">
        <div class="form-group">
            <label for="fantasia" class="lblNome">Fantasia</label>
            <input type="text" name="fantasia" id="fantasia" class="form-control" value="{{isset($dados) ? $dados->fantasia : ''}}">
        </div>
    </div>

    <div class="col-12" id="txtRazao">
        <div class="form-group">
            <label for="razao">Razão Social</label>
            <input type="text" name="razao" id="razao" class="form-control" value="{{isset($dados) ? $dados->razao : ''}}">
        </div>
    </div>

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

    <div class="col-4">
        <div class="form-group">
            <label for="tel">Telefone</label>
            <input type="text" name="tel" id="tel" class="form-control tel" value="{{isset($dados) ? $dados->tel : ''}}">
        </div>
    </div>

    <div class="col-4">
        <div class="form-group">
            <label for="cel">Celular ou WhatsApp</label>
            <input type="text" name="cel" id="cel" class="form-control tel" value="{{isset($dados) ? $dados->cel : ''}}">
        </div>
    </div>

    <div class="col-4">
        <div class="form-group">
            <label for="contato">Nome Contato</label>
            <input type="text" name="contato" id="contato" class="form-control" value="{{isset($dados) ? $dados->contato : ''}}">
        </div>
    </div>

    <div class="col-12">
        <div class="form-group">
            <label for="email">E-mail</label>
            <input type="text" name="email" id="email" class="form-control" value="{{isset($dados) ? $dados->email : ''}}">
        </div>
    </div>

    <div class="col-12">
        <div class="form-group">
            <button type="submit" class="btn btn-primary float-right"><i class="fas fa-save"></i>&nbsp;Salvar</button>
        </div>
    </div>

</div>
