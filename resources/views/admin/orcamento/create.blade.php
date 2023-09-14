@extends('adminlte::page')

@section('content_header')
    <h1 class="m-0 text-dark">Novo Orçamento <a href="{{route('admin.frota.index')}}" class="btn btn-warning float-right"><i class="fas fa-arrow-left"></i>&nbsp;Voltar</a></h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <form action="{{route('admin.frota.store')}}" method="post">
                                @include('admin.orcamento._form')
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
        $('#marca').change(function(){
            $.get('/api/modelos/' + $(this).val(), function(data){
                dados = '<option>Selecione o Modelo</option>'
                data.forEach(item => {
                    dados += '<option value="'+ item.id +'">'+ item.nome +'</option>'
                });
                $('#modelo').html(dados).show();
            })
        })

        $('#btnSalvarMarca').click(function(){
            $.post('/api/marca', { nome: $('').val()}, function(data){
                dados = '<option>Selecione a Marca</option>'
                data.forEach(item => {
                    dados += '<option value="'+ item.id +'">'+ item.nome +'</option>'
                });
                $('#marca').html(dados).show();                
            })
        })
    });
</script>
@stop
