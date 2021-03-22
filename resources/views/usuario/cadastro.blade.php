@extends('layout.base')

@section('titulo','Cadastro de Usuario')

@section('conteudo')
<form action="{{route('salvar')}}" method="post">
    {{csrf_field()}}
    <div class="field">
        <label for="nome">Nome:</label>
        <input type="text" name="nome">
    </div>

    <div class="field">
        <label for="email">E-mail:</label>
        <input type="text" name="email">
    </div>  
    <div class="btn">
        <button type="submit">Salvar</button>
    </div>
</form>
@endsection