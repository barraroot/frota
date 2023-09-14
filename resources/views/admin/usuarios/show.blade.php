@extends('adminlte::page')

@section('content_header')
    <h1 class="m-0 text-dark">Dados do Produto <a href="{{route('admin.produtos.index')}}" class="btn btn-warning float-right"><i class="fas fa-arrow-left"></i>&nbsp;Voltar</a></h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>#</th>
                                        <td>{{$dados->id}}</td>
                                    </tr>
                                    <tr>
                                        <th>Titulo</th>
                                        <td>{{$dados->titulo}}</td>
                                    </tr>
                                    <tr>
                                        <th>Subtitulo</th>
                                        <td>{{$dados->subtitulo}}</td>
                                    </tr>
                                    <tr>
                                        <th>Carga Horaria</th>
                                        <td>{{$dados->carga_horaria}}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-12">
                            <hr>
                        </div>
                        <div class="col-6">
                            <h4>Conteudo 1</h4>
                            {!! $dados->conteudo1 !!}
                        </div>
                        <div class="col-6">
                            <h4>Conteudo 2</h4>
                            {!! $dados->conteudo2 !!}
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
        $('.btnDelete').click(function(e){
            e.preventDefault();
            let idForm = $(this).attr('data-form');
            Swal.fire({
                title: 'Exclusão',
                html:'Confirmar excluir o registro ?',
                showCloseButton: true,
                showCancelButton: true,
                focusConfirm: false,
                confirmButtonText:
                    '<i class="fa fa-thumbs-up"></i> Sim',
                confirmButtonAriaLabel: 'Thumbs up, great!',
                cancelButtonText:
                    '<i class="fa fa-thumbs-down"></i> Não',
                cancelButtonAriaLabel: 'Thumbs down'
            }).then((result) => {
                console.log(result);
                if(result.value !== undefined)
                {
                    if(result.value)
                    {
                        $('#'+ idForm).submit();
                    }
                }
            })
        });
    });
</script>
@stop
