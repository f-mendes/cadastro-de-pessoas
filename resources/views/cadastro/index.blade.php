@extends('layout')

@section('cabecalho')
    Lista de Clientes
@endsection

@section('conteudo')
    @if(!empty($mensagem))
    <div class="alert alert-success">
        {{$mensagem}}
    </div>
    @endif
        <a href="/pessoas/create" class="btn btn-primary mb-2">
            <div class="row">
                <span class="ml-3 mr-1">Novo Cliente</span>
                <span class="material-icons mr-3">
                    person_add
                </span>
            </div>
        </a>
        <ul class="list-group" >
         @foreach($pessoas as $pessoa)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                {{$pessoa->nome.' '.$pessoa->sobrenome}}

                <span class="d-flex">
                    <div>
                        <input type="hidden" value="{{$pessoa->id}}">
                        @csrf
                        <button type="button" class="btn btn-link buscaInfoCliente" data-toggle="modal" data-target="#modalInfo">
                            <span class="material-icons">preview</span>
                        </button>
                        <button type="button" class="btn btn-link EditaCliente" data-toggle="modal" data-target="#modalEdit">
                            <span class="material-icons">edit</span>
                        </button>
                    </div>
                    <form action="/pessoas/{{$pessoa->id}}" method="post"
                    onsubmit="return confirm('Tem certeza que deseja excluir o cliente {{$pessoa->nome.' '.$pessoa->sobrenome}}')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-link">
                            <span class="material-icons">delete</span>
                        </button>
                    </form>
                </span>
            </li>

         @endforeach
        </ul>



@endsection
@include('modalInfo')
@include('modalEdit')


