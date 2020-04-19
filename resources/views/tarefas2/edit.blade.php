@extends('layouts.layout')

@section('title', 'Edição de Tarefas')

@section('content')
    <h1>Edição</h1>

    <form method="POST">
        @csrf

        <label>
            Título:</br></br>
        <input type="text" name="titulo" value="{{ $data->titulo }}"/>
        </label>

        <input type="submit" value="Salvar" />
        <br/><br/>
    </form>

@endsection