@extends('adminlte::page')

@section('content_header')
    <h1 class="m-0 text-dark">Manifesto de Viagem <a href="{{route('admin.manifesto.create')}}" class="btn btn-primary float-right"><i class="fas fa-plus"></i>&nbsp;Novo</a></h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <table class="table table-stripped dataTable">
                                <thead>
                                    <tr>
                                        <th scope="col">Número</th>
                                        <th scope="col">Dia</th>
                                        <th scope="col">Cliente</th>
                                        <th scope="col">Tipo Frota</th>
                                        <th scope="col">Destino</th>
                                        <th scope="col">Valor</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($dados as $item)
                                    <tr>
                                        <td>{{$item->id}}</td>
                                        <td>{{$item->placa}}</td>
                                        <td>{{$item->renavam}}</td>
                                        <td>{{$item->marca->nome}}</td>
                                        <td>{{$item->modelo->nome}}</td>
                                        <td>{{$item->cor}}</td>
                                        <td>{{$item->km_atual}}</td>
                                        <td>
                                            <form id="formDelete-{{$item->id}}" action="{{route('admin.frota.delete', ['id' => $item->id])}}" method="post">
                                                @method('delete')
                                                @csrf
                                                <!-- <a href="{{route('admin.frota.show', ['id' => $item->id])}}" class="btn btn-primary"><i class="fas fa-eye"></i></a> -->
                                                <a href="{{route('admin.frota.edit', ['id' => $item->id])}}" class="btn btn-warning"><i class="fas fa-pencil-alt"></i></a>
                                                <button type="submit" class="btn btn-danger btnDelete" data-form="formDelete-{{$item->id}}"><i class="fas fa-trash"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
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
