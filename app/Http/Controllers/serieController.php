<?php

namespace App\Http\Controllers;

use App\Models\Serie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class serieController extends Controller
{

    public function index(Request $request){
        // $series=Serie::all();
        $series=Serie::query()->orderBy('name')->get();
         return view('series.index')->with('series',$series);
    }

    public function create(){
        return view('series.create');
    }

    public function store(Request $request){
        $series=Serie::create($request->only('name'));
        $series->save();
        return redirect('/series');
        


    }

}
