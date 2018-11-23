@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Pedidos</div>
                <div class="panel-body">
                    @if(count($pedidos) == 0)
                        <div class="alert alert-danger">
                            Não existem pedidos cadastrados.
                        </div>
                    @else
                    <table class="table table-hover">         
                        <tr>
                            <th>Cod</th>
                            <th>Consumidor</th>
                            <th>Número de Itens</th>
                            <th>Total</th>
                            <th>Data</th>
                            <th colspan="2">Ações</th>
                        </tr>
                        
                        @for ($i=0; $i < count($pedidos); $i++)
                        <tr>
                            <td>{{ $pedidos[$i]->id }}</td>
                            <td>{{ $pedidos[$i]->consumidor->usuario->name }}</td>
                            <td>{{ $totaisItens[$i] }}</td>
                            <td>{{ 'R$'.number_format($totaisPedidos[$i], 2) }}</td>
                            <td>{{ \projetoGCA\Http\Controllers\UtilsController::dataFormato($pedidos[$i]->data_pedido, 'd/m/Y') }}</td>
                            <td><a class="btn btn-info" href="{{action('EventoController@itensPedido', $pedidos[$i]->id)}}">Itens</a></td>
                        </tr>
                        @endfor
                    </table>
                    @endif
                </div>
                <div class="panel-footer">
                    <a class="btn btn-danger" href="{{URL::previous()}}">Voltar</a>
                    <a class="btn btn-primary" href="{{action('PdfController@criarRelatorioComposicaoPedidos', $evento_id)}}">Relatório Montagem Pedido</a>
                    <a class="btn btn-warning" href="{{action('PdfController@criarRelatorioPedidosProdutores', $evento_id)}}">Relatório Produtor</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection