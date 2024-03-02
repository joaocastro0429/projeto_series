<?php

namespace App\Http\Controllers;

use App\Models\Serie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class serieController extends Controller
{

    public function index(Request $request){
        // $series=Serie::all();
        $series = Serie::query()->orderBy('name')->get();
        $mensagemSucesso = $request->session()->get('mensagem.sucesso');   
        $request->session()->forget('mensagem.sucesso');  // Corrigido aqui
        return view('series.index')->with('series', $series)->with('mensagemSucesso', $mensagemSucesso);
    }

    public function create(){
        return view('series.create');
    }

    public function store(Request $request){
        $series = Serie::create($request->only('name'));
        $series->save();
        return redirect()->route('series.series');
    }

    public function destroy(Request $request){
        $series = Serie::find($request->id);
        $series->delete();
        $request->session()->flash('mensagem.sucesso', 'Série removida com sucesso'); // Atualizado para a mensagem correta
        return redirect()->route('series.series');
    }

}
