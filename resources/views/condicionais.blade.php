<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pagina Condicionais</title>
</head>
<body>
    <h1>Bem-Vindo ao condiconais! 🤙👍🏼</h1>



    {{--
        <span>O Usuario é o Fernando?</span>

        @if ($nome == 'Fernando')
            <h1>Sim</h1>
        @else
            <h2>Não</h2>
        @endif

    --}}

    {{--
        @if ($nome == 'teste')
            <h1>É teste</h1>

        @elseif ($nome == 'Fernando')
            <h2>É Fernando</h2>
        @else
            <h2>Não é nem um dos dois</h2>
        @endif
    --}}

    {{--
        @for ($i=1;$i <= 10;$i++)
            <p>O valor de i é: {{$i}} </p>
        @endfor
    --}}

    @foreach ( $ingredientes as $ing )
        <p> {{$ing}} -
            @component('components.botao')
                @slot('href')
                http://google.com.br
                @endslot
                @slot('cor')
                    blue
                @endslot
                Editar
            @endcomponent

            @component('components.botao')
                @slot('href')
                http://9gag.com
                @endslot
                @slot('cor')
                    red
                @endslot
                Deletar
            @endcomponent
        </p>
    @endforeach



</body>
</html>
