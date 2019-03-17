@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Consulta de Clientes de CRM</div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <td>Nome</td>
                                <td>E-mail</td>
                                <td>Endereço</td>
                                <td>Bairro</td>
                                <td>Cidade</td>
                                <td>Estado</td>
                                <td>Telefone Celular</td>
                                
                               
                            </tr>
                            
                        </thead>
                        <tbody>
                            @foreach ($clientes as $cliente)
                                <tr>
                                    <td>{{$cliente->nome}}</td>
                                    <td>{{$cliente->email}}</td>
                                    <td>{{$cliente->endereco}}</td>
                                    <td>{{$cliente->bairro}}</td>
                                    <td>{{$cliente->Cidade}}</td>
                                    <td>{{$cliente->estado}}</td>
                                    <td>{{$cliente->telefone_celular}}</td>
                                    

                                </tr>
                            @endforeach
                        </tbody>
                       
                    </table>
                      
                 </div>
            </div>
        </div>
    </div>
</div>
@endsection