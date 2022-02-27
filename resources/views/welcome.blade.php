<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>


    </head>
    <body>
            <h1>Algum titulo :P</h1>
            @if(10>5)
                <p>Real</p>
                @endif

            <p>{{ $nome }}</p>

   @if ($nome == "Pedro")
<p>0 nome é Pedro</p>
@elseif($nome = "Sofia")
<p>O nome é {{ $nome }} e ela tem {{$idade}} anos, sua profissão é {{$profissao}} </p>
@else
<p>0 nome não é Pedro</p>
@endif

@for($i =0; $i < count($arr); $i++)
<p>{{$arr [$i]}} - {{$i}}</p>
@endfor

@php
$name = "Sofia";
echo $name;
@endphp

@foreach($nomes as $nome)
<p>{{$loop->index}}</p>
<p>{{$nome}}</p>
@endforeach


{{-- Coemntario de blade escondido uuuuu--}}

    </body>
</html>
