@extends('layouts.app')

@section('content')
<form method="POST" action="/produto/home">
    <div class="container">
        <div class="row justify-content-left">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="formGroupExampleInput2">Codigo do Produto</label>
                    <input type="text" class="form-control" name="codigo_produto" id="formGroupExampleInput2" placeholder="Id do Produto">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="formGroupExampleInput2">Descrição</label>
                    <input type="text" class="form-control" name="descricao" id="formGroupExampleInput2" placeholder="Notebook">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="formGroupExampleInput2">Marca do Produto</label>
                    <input type="text" class="form-control" name="marca_produto" id="formGroupExampleInput2" placeholder="Dell">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="formGroupExampleInput2">Fornecedor</label>
                    <input type="text" class="form-control" name="fornecedor" id="formGroupExampleInput2" placeholder="Dell Computadores">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="formGroupExampleInput2">Tipo do Produto</label>
                    <input type="text" class="form-control" name="tipo_produto" id="formGroupExampleInput2" placeholder="Eletronico">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="formGroupExampleInput2">Garantia</label>
                    <input type="text" class="form-control" name="garantia" id="formGroupExampleInput2" placeholder="1 á 2 anos">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="formGroupExampleInput2">Preço de Fabricante</label>
                    <input type="text" class="form-control" name="preco_fabricante" id="formGroupExampleInput2" placeholder="R$ 1.000,00">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="formGroupExampleInput2">Preço Minimo</label>
                    <input type="text" class="form-control" name="preco_minimo" id="formGroupExampleInput2" placeholder="R$ 2.000,00">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="formGroupExampleInput2">Preço Maximo</label>
                    <input type="text" class="form-control" name="preco_maximo" id="formGroupExampleInput2" placeholder="R$ 3.000,00">
                </div>
            </div>
            <div class="col-md-8">
                <div class="form-group">
                    <label for="formGroupExampleInput2">Origem do Produto</label>
                    <input type="text" class="form-control" name="origem_produto" id="formGroupExampleInput2"
                        placeholder="Ex: Empresa alocada em Alphaville">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="formGroupExampleInput2">Loja Fisica</label>
                    <input type="text" class="form-control" name="loja_fisica" id="formGroupExampleInput2" placeholder="Americanas">
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Descreva seu comentario aqui</label>
                    <textarea class="form-control" name="comentario" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Cadastrar Produto</button>
                </div>
            </div>
        </div>
    </div>
    @csrf
</form>

@endsection