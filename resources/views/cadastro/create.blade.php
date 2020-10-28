@extends('layout')

@section('cabecalho')
    Novo Cliente
@endsection

@section('conteudo')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="/pessoas" method="post">
        @csrf
       @include('form')
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
@endsection
