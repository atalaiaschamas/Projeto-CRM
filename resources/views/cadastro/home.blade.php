@extends('layouts.app')

@section('content')
<form method="POST" action="/cadastro/home">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">

                <div class="form-group">
                    <label for="formGroupExampleInput">Nome</label>
                    <input type="text" class="form-control" name="nome" id="formGroupExampleInput" placeholder="Nome Completo">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">E-mail</label>
                    <input type="text" class="form-control" name="email" id="formGroupExampleInput2"
                        placeholder="example@example.com">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">Endereço</label>
                    <input type="text" class="form-control" name="endereco" id="formGroupExampleInput2" placeholder="Av.Paulista">
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row justify-content-left">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="formGroupExampleInput2">Bairro</label>
                    <input type="text" class="form-control" name="bairro" id="formGroupExampleInput2" placeholder="Boa Vista">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="formGroupExampleInput2">Cidade</label>
                    <input type="text" class="form-control" name="cidade" id="formGroupExampleInput2" placeholder="São Paulo">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="formGroupExampleInput2">Estado</label>
                    <input type="text" class="form-control" name="estado" id="formGroupExampleInput2" placeholder="São Paulo">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="formGroupExampleInput2">Telefone Residencial</label>
                    <input type="text" class="form-control" name="telefone_residencial" id="formGroupExampleInput2" placeholder="(11) 9999-9999">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="formGroupExampleInput2">Telefone Celular</label>
                    <input type="text" class="form-control" name="telefone_celular" id="formGroupExampleInput2" placeholder="(11) 99999-9999">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="formGroupExampleInput2">Telefone Comercial</label>
                    <input type="text" class="form-control" name="telefone_comercial" id="formGroupExampleInput2" placeholder="(11) 99999-9999">
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Cadastrar Cliente</button>
                </div>
            </div>
        </div>
    </div>
    @csrf
</form>

@endsection