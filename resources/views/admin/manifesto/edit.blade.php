@extends('adminlte::page')

@section('content_header')
    <h1 class="m-0 text-dark">Alteração de Cliente <a href="{{route('admin.clientes.index')}}" class="btn btn-warning float-right"><i class="fas fa-arrow-left"></i>&nbsp;Voltar</a></h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <form action="{{route('admin.clientes.update', ['id' => $dados->id])}}" method="post">
                                @method('put')
                                @include('admin.clientes._form')
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

        $('#tipo').change(function(){
            let tipoCad = $(this).val();
            console.log(tipoCad);
            if(tipoCad == 0)
            {
                $('.lblDoc').html('CNPJ');
                $('#doc').inputmask('99.999.999/9999-99');
                $('.lblNome').html('Nome');
                $('#txtRazao').removeClass('d-none');
            }
            else
            {
                $('.lblDoc').html('CPF');
                $('#doc').inputmask('999.999.999-99');
                $('.lblNome').html('Fantasia');
                $('#txtRazao').addClass('d-none');
            }
        });
        $("#tipo").trigger('change');

    });
</script>
@stop
