<?php

namespace App\Http\Controllers;

use App\Models\Livros;
use Illuminate\Http\Request;

class LivrariaController extends Controller
{
    public function index()
    {
        $livros = Livros::all();
        return view('index', compact('livros'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'author' => 'required',
            'year' => 'required|integer',
            'publisher' => 'required',
        ]);
    
        Livros::create($request->only(['title', 'author', 'year', 'publisher']));
        return redirect()->route('index')->with('sucesso', 'Livro criado com sucesso.');
    }

    public function show(Livros $livro)
    {
        return view('show', compact('livro'));
    }

    public function edit(Livros  $livro)
    {
        return view('edit', compact('livro'));
    }

    public function update(Request $request, Livros $livro)
    {
        $request->validate([
        'title' => 'required',
        'author' => 'required',
        'year' => 'required|integer',
        'publisher' => 'required',
    ]);

    $livro->update($request->only(['title', 'author', 'year', 'publisher']));
    return redirect()->route('index')->with('successo', 'Livro atualizado com sucesso.');

    }

    public function destroy(Livros $livro)
    {
        $livro->delete();
        return redirect()->route('index')->with('successo', 'Livro deletado com sucesso.');
    }
}
