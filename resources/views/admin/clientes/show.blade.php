@extends('adminlte::page')

@section('content_header')
    <h1 class="m-0 text-dark">Dados do Cliente <a href="{{route('admin.fornecedores.index')}}" class="btn btn-warning float-right"><i class="fas fa-arrow-left"></i>&nbsp;Voltar</a></h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <form action="{{route('admin.fornecedores.store')}}" method="post">
                                @include('admin.fornecedores._form')
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

</script>
@stop
