<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pagina de Bem-Vindo!</title>
</head>
<body>

    <h1>Bem-Vindo! 🤙👍🏼</h1>
    <h2> id: {{$id}}</h2>
    <h2> Nome: {{$nome}}</h2>
    <h2> Sobrenome:{{$sobrenome}}</h2>
    <h2> Idade: {{$idade}}</h2>
    <h2> Data de nascimento: {{$data_nasc}}</h2>

    <h3>1+1 é: {{1+1}}</h3>
    <h3>O código é: {{--funcao()--}}</h3>

    <p>
        O código HTML: {{$html}}
        <br>
        O código HTML Interpretado: {!!$html!!}
    </p>

    

</body>
</html>

