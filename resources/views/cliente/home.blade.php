@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="#">CRM</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                    aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-item nav-link active" href="/cadastro/home">Cadastro de Cliente <span
                                class="sr-only">(current)</span></a>
                        <a class="nav-item nav-link" href="/produto/home">Cadastro de Produto</a>
                        <a class="nav-item nav-link" href="/consultaclientes/consulta">Consulta de Clientes</a>
                        <a class="nav-item nav-link" href="/consultaprodutos/consulta">Consulta de Produtos</a>
                        
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>
<br>
<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card text-center">
                <div class="card-header">
                    CRM Sistemas
                </div>
                <div class="card-body">
                    <h5 class="card-title">Sobre Empresa</h5>
                    <p class="card-text">

                    Empresa Americana que  surgiu na união de 3 Alunos apaixonados por Desenvolvimento
                    atuada na cidade de São Paulo em um amplo espaço fisico que se encontra na av.Paulista,
                    e tem foco em melhorar desempenho das Empresas na area de software em ERP.

                    </p>
                    
                </div>
                <div class="card-footer text-muted">
                    CRM Sistemas soluções em Sistemas ERP.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection