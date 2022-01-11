@extends('layouts.main')

@section('title', 'HDC Events')

@section('content')

    <h1>Algum título</h1>

    <img src="/img/banner.jpg" alt="Banner">
    
    @if(10 > 15)
        <p>A condição é true</p>
    @endif

    <p>{{ $nome }}</p>

    @if($nome == "Pedro")
        <p>O nome é Pedro</p>
    @elseif($nome == "Bruno")
        <p>O nome na verdade é {{ $nome }} e ele tem {{ $idade }} anos</p>
    @else
        <p>O nome não é Pedro</p>
    @endif

    @for($i = 0; $i < count($arr); $i++)
        <p>{{ $arr[$i] }} - {{ $i }}</p>
        @if($i == 2)
            <p>O i é igual a 2</p>
        @endif
    @endfor

    {{-- Comentario em Blade --}}

@endsection