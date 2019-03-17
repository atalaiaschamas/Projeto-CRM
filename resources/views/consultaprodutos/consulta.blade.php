@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Consulta de Produtos de CRM</div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                
                                <td>Descricao</td>
                                <td>Marca-Produto</td>
                                <td>Tipo-Produto</td>
                                <td>Garantia</td>
                                <td>Preco</td>
                                <td>loja-Fisica</td>
                                <td>Comentario</td>
                            </tr>
                            
                        </thead>
                        <tbody>
                            @foreach ($produtos as $produto)
                                <tr>
                                   
                                    <td>{{$produto->descricao}}</td>
                                    <td>{{$produto->marca_produto}}</td>
                                    <td>{{$produto->tipo_produto}}</td>
                                    <td>{{$produto->garantia}}</td>
                                    <td>{{$produto->preco_fabricante}}</td>
                                    <td>{{$produto->loja_fisica}}</td>
                                    <td>{{$produto->comentario}}</td>

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