<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class serieController extends Controller
{
    public function index(Request $request){
        $series=[
            'Punisher',
            'Lost',
            'Grey\'s Anatomy'

        ];
      return view('series.index',compact('series'));
    }

    public function create(){
        return view('series.create');
    }

    public function store(Request $request){
        $series=$request->input('name');

        if(DB::insert('INSERT INTO serie (name) VALUES (blabla)',[$series])){
            return 'OK';
        }else{

            return "algo deu errado";

        }

        


    }

}
