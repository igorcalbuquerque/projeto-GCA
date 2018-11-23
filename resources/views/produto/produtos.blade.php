@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Produtos</div>
                @if(old('nome'))
                    <div class="alert alert-success">
                        <strong>Sucesso!</strong>
                        O produto {{old('nome')}} foi adicionado.
                    </div>
                @endif
                <div class="panel-body">
                @if(count($produtos) == 0)
                    <div class="alert alert-danger">
                            Não existem produtos cadastrados para este grupo de consumo.
                    </div>
                @else
                    <table class="table table-hover">         
                        <tr>
                            <th>Cod</th>
                            <th>Nome do Produtor</th>
                            <th>Nome</th>
                            <th>Descrição</th>
                            <th>Preço</th>
                            <th>Unidade de Venda</th>
                            <th colspan="2">Ações</th>
                        </tr>
                        
                        @foreach ($produtos as $produto)
                        <tr>
                            <td>{{ $produto->id }}</td>
                            <td>{{ $produto->nome_produtor }}</td>
                            <td>{{ $produto->nome }}</td>
                            <td>{{ $produto->descricao }}</td>
                            <td>{{ 'R$'.number_format($produto->preco, 2 )}}</td>
                            <td>{{ $produto->unidadeVenda->nome }}</td>  
                            <td><a class="btn btn-success"href="{{ action('ProdutoController@editar', $produto->id) }}">Editar</a></td>
                            <td><a class="btn btn-danger"href="{{ action('ProdutoController@remover',$produto->id) }}">Remover</a></td>
                        </tr>
                        @endforeach
                    </table>
                @endif
                </div>
                <div class="panel-footer">
                    <a class="btn btn-danger" href="{{URL::previous()}}">Voltar</a>
                    <a class="btn btn-success" href="{{action('ProdutoController@novo', $idGrupoConsumo)}}">Novo</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection