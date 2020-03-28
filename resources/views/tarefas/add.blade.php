@extends('layouts.layout')

@section('title', 'Adição de Tarefas')

@section('content')
    <h1>Adição</h1>

    <form method="POST">
        @csrf

        <label>
            Título:</br></br>
            <input type="text" name="titulo" />
        </label>

        <input type="submit" value="Adicionar" />
        <br/><br/>
    </form>

@endsection