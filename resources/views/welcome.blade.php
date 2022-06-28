@extends('layouts.main')

@section('title', 'HDC Events')

@section('content')

        <h1>Algum título</h1>

        @if(10 > 15)
            <p>A condição é true</a>
        @endif

        <p>{{ $nome }}</p>

        @if ($nome == "Pedro")
            <p>O nome é Pedro</p>
        @elseif ($nome == "Matheus")
            <p>O nome é {{ $nome }} e ele tem {{ $idade }} anos, e trabalha como {{ $profissao }}</p>
        @else
            <p>O nome não é Pedro</p>
        @endif


        @for ($i=0; $i < count($arr); $i++)
            <p>{{ $arr[$i] }} - {{ $i }}</p>
        @endfor

        @php
            $name="João";
            echo $name;
        @endphp

        @foreach ($nomes as $nomes)
            <p>{{ $loop->index }}</p>
            <p>{{ $nomes }}</p>
        @endforeach

@endsection

