@extends('adminlte::page')

@section('content_header')
    <h1 class="m-0 text-dark">Novo Tipo de Frota <a href="{{route('admin.tipo-frota.index')}}" class="btn btn-warning float-right"><i class="fas fa-arrow-left"></i>&nbsp;Voltar</a></h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <form action="{{route('admin.tipo-frota.store')}}" method="post">
                                @include('admin.tipo-frota._form')
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('adminlte_js')
<script>
    $(document).ready(function(){
        $('.cep').blur(function(){
            let cep = $(this).val();
            console.log(cep);
            $.get('https://viacep.com.br/ws/'+ cep +'/json/', function(data) {
                console.log(data);
                $('#end_logra').val(data.logradouro);
                $('#end_comp').val(data.complemento);
                $('#end_bairro').val(data.bairro);
                $('#end_cidade').val(data.localidade);
                $('#end_uf').val(data.uf);
                $('#end_num').focus();
            });
        });
    ClassicEditor
        .create( document.querySelector('#conteudo1'))
        .catch( error => {
            console.error( error );
        });
    ClassicEditor
        .create( document.querySelector('#conteudo2'))
        .catch( error => {
            console.error( error );
        });
    });
</script>
@stop
