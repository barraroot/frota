@extends('adminlte::page')

@section('content_header')
    <h1 class="m-0 text-dark">Controle Operacional</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
    
                        <div class="col-lg-3 col-6">
                            <div class="small-box bg-info">
                                <div class="inner">
                                    <h3>0</h3>
                                    <p>Orçamentos</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-bag"></i>
                                </div>
                                <a href="#" class="small-box-footer">Ver mais <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-6">
                            <div class="small-box bg-warning">
                                <div class="inner">
                                    <h3>0</h3>
                                    <p>Em execução</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-success"></i>
                                </div>
                                <a href="#" class="small-box-footer">Ver mais <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-6">
                            <div class="small-box bg-success">
                                <div class="inner">
                                    <h3>0</h3>
                                    <p>Realizados</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-bag"></i>
                                </div>
                                <a href="#" class="small-box-footer">Ver mais <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-6">
                            <div class="small-box bg-danger">
                                <div class="inner">
                                    <h3>0</h3>
                                    <p>Cancelados</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-bag"></i>
                                </div>
                                <a href="#" class="small-box-footer">Ver mais <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-6">
                            <h3>Orçamentos pendente</h3>
                            <table class="table table-stripped dataTable">
                                <thead>
                                    <tr>
                                        <th scope="col">Número</th>
                                        <th scope="col">Dia</th>
                                        <th scope="col">Cliente</th>
                                        <th scope="col">Tipo Frota</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td colspan="6" class="text-center">Sem Informações</td>
                                    </tr>
                                </tbody>
                            </table>                            
                        </div>
                        <div class="col-6">
                            <h3>Manifestos do dia</h3>
                            <table class="table table-stripped dataTable">
                                <thead>
                                    <tr>
                                        <th scope="col">Número</th>
                                        <th scope="col">Dia</th>
                                        <th scope="col">Cliente</th>
                                        <th scope="col">Veiculo</th>
                                        <th scope="col">Saida</th>
                                        <th scope="col">Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td colspan="6" class="text-center">Sem Informações</td>
                                    </tr>
                                </tbody>
                            </table>                             
                        </div>                        
                    </div> 
                    <div class="row">
                        <div class="col-12"><hr></div>
                        <div class="col-6">
                            <h3>Frota Disponivel</h3>
                            <table class="table table-stripped dataTable">
                                <thead>
                                    <tr>
                                        <th scope="col">Placa</th>
                                        <th scope="col">Tipo Frota</th>
                                        <th scope="col">Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td colspan="3" class="text-center">Sem Informações</td>
                                    </tr>
                                </tbody>
                            </table>                              
                        </div>
                        <div class="col-6">
                            <h3>Frota em Manutenção</h3>
                            <table class="table table-stripped dataTable">
                                <thead>
                                    <tr>
                                        <th scope="col">Placa</th>
                                        <th scope="col">Tipo Frota</th>
                                        <th scope="col">Entrada</th>
                                        <th scope="col">Previsão Saida</th>
                                        <th scope="col">Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td colspan="5" class="text-center">Sem Informações</td>
                                    </tr>
                                </tbody>
                            </table>                              
                        </div>                        
                    </div>                                    
                </div>
            </div>
        </div>
    </div>
@stop
