@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Editar Unidade de Venda</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="/atualizarUnidadeVenda">
                        {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('id') ? ' has-error' : '' }}">
                            <div class="col-md-6">
                                <input id="id" type="hidden" class="form-control" name="id" value="{{ $unidadeVenda->id }}">
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('nome') ? ' has-error' : '' }}">
                            <label for="nome" class="col-md-4 control-label">Nome</label>

                            <div class="col-md-6">
                                <input id="nome" type="text" class="form-control" name="nome" value="{{$unidadeVenda->nome}}" required autofocus>

                                @if ($errors->has('nome'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nome') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('descricao') ? ' has-error' : '' }}">
                            <label for="descricao" class="col-md-4 control-label">Descrição</label>

                            <div class="col-md-6">
                                <input id="descricao" type="text" class="form-control" name="descricao" value="{{$unidadeVenda->descricao}}" required autofocus>

                                @if ($errors->has('descricao'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('descricao') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('is_fracionado') ? ' has-error' : '' }}">
                            <label for="is_fracionado" class="col-md-4 control-label">Fracionado</label>

                            <div class="col-md-6">
                            <select id="is_fracionado" class="form-control" name="is_fracionado" required autofocus>
                                    <option value="" selected disabled hidden>Selecionar</option>
 					                <option value="1">Sim</option>
					                <option value="0">Não</option>
                                </select>
                                @if ($errors->has('is_fracionado'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('is_fracionado') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('is_porcao') ? ' has-error' : '' }}">
                            <label for="is_porcao" class="col-md-4 control-label">Porção</label>

                            <div class="col-md-6">
                            <select id="is_porcao" class="form-control" name="is_porcao" required autofocus>
                                    <option value="" selected disabled hidden>Selecionar</option>
 					                <option value="1">Sim</option>
					                <option value="0">Não</option>
                                </select>
                                @if ($errors->has('is_porcao'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('is_porcao') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <a class="btn btn-danger" href="{{URL::previous()}}">Voltar</a>
                                <button type="submit" class="btn btn-primary">
                                    Atualizar
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection