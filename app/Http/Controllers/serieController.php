<?php

namespace App\Http\Controllers;

use App\Models\Series;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class serieController extends Controller
{
    public function index(Request $request){
        $series=DB::select("SELECT name FROM serie");

        return view('series.index')->with('series',$series);
    }

    public function create(){
        return view('series.create');
    }

    public function store(Request $request){
        $series=$request->input('name');

        if(DB::insert('INSERT INTO serie (name) VALUES (?)',[$series])){
            return 'OK';
        }else{

            return "algo deu errado";

        }

        


    }

}
