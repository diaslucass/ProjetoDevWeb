@extends('layouts.app')

<head>
    <style>
        h1.title{
            font-size:3.5rem;
        }

        .containerform{
            font-family: "Poppins" , sans-serif;
            display:flex;
            flex-direction: column;
            align-items: center;
            line-height: 2;
            font-size: 1.6rem;
            font-weight: bold;
            
        }

        .containerform input{
            width: 300px;
            height: 45px;
            border-radius: 20px;
            border: none;
            padding: 10px;
            font-family: "Poppins" , sans-serif;
        }

        .containerform button{
            margin: 40px 0px;
            width: 300px;
            height: 45px;
            border-radius: 20px;
            border: none;
            background-color: #c2e9ff;
            color: #0e1a2d;
            font-size: 1.4rem;
            font-weight: bold;
            cursor: pointer;
        }

        .containerform button:hover{
            background-color: #0e1a2d;
            color: #c2e9ff;
            cursor: pointer;
            border: 2px solid white;
            transition: 0.3s;
        }

        

    </style>
</head>

@section('content')
    <h1 class="title">Editar livros</h1>
    <form action="{{ route('update', $livro->id) }}" method="POST" class="containerform">
        @csrf
        @method('PUT')
        <label>Título:</label>
        <input type="text" name="title" value="{{ $livro->title }}" required>
        <label>Autor:</label>
        <input type="text" name="author" value="{{ $livro->author }}" required>
        <label>Ano:</label>
        <input type="number" name="year" value="{{ $livro->year }}" required>
        <label>Editora:</label>
        <input type="text" name="publisher" value="{{ $livro->publisher }}" required>
        <button type="submit">Salvar Livro</button>
    </form>
@endsection
