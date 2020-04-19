<?php

namespace App\Http\Controllers;

use App\Tarefa;
use Illuminate\Http\Request;

class TarefaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tarefas = Tarefa::all();
        return view('tarefas.index', ['tarefas' => $tarefas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tarefas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->only([
            'titulo',
        ]);

        $tarefa = new Tarefa;

        $tarefa->titulo = $data['titulo'];

        $tarefa->save();

        return redirect()->route('tarefas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tarefa  $tarefa
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $curso = Curso::find($id);
        if ($curso) {
            return view ('cursos.show', [
                'curso' => $curso
            ]);
        }
        return redirect()->route('cursos.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tarefa  $tarefa
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tarefa = Tarefa::find($id);

        if ($tarefa) {
            return view ('tarefas.edit', [
                'tarefa' => $tarefa,
            ]);
        }
        return redirect()->route('tarefas.index');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tarefa  $tarefa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $tarefa = Tarefa::find($id);

        if ($tarefa) {

            $data = $request->only([
                'titulo'
            ]);

            $tarefa->titulo = $data['titulo'];
                                                    
            $tarefa -> save();
        }

        return redirect()->route('tarefas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tarefa  $tarefa
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tarefa = Tarefa::find($id);
        $tarefa->delete();

        return redirect()->route('tarefas.index');
    }

    public function done($id) {

        $tarefa = Tarefa::find($id);
        if ($tarefa->resolvido === 1)
            $tarefa->resolvido = 0;
        else
            $tarefa->resolvido = 1;
        $tarefa->save();
        
        return redirect()->route('tarefas.index');
    }
}
