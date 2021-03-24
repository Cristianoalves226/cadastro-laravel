@extends('layout.base')

@section('titulo', 'Cadastro de Usuario')

@section('conteudo')
    <form action="{{ route('salvar') }}" method="post">
        {{ csrf_field() }}
        <div class="field">
            <label for="nome">Nome:</label>
            <input type="text" name="nome">

            @if ($errors->has('nome'))
                @foreach ($errors as $erro)
                    <strong class="erros">
                        {{ $erro }}
                    </strong>
                @endforeach
            @endif
        </div>

        <div class="field">
            <label for="email">E-mail:</label>
            <input type="text" name="email">

            @if ($errors->has('email'))
                @foreach ($errors as $erro)
                    <strong class="erros">
                        {{ $erro }}
                    </strong>
                @endforeach
            @endif
        </div>

        <div class="field">
            <label for="senha">Senha:</label>
            <input type="password" name="senha">

            @if ($errors->has('senha'))
                @foreach ($errors as $erro)
                    <strong class="erros">
                        {{ $erro }}
                    </strong>
                @endforeach
            @endif
        </div>
        <div class="btn">
            <button type="submit">Salvar</button>
        </div>
    </form>
@endsection
