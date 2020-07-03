<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PertanyaanModel;

class PertanyaanController extends Controller
{
    //
    public function Index(){
        $pertanyaan = PertanyaanModel::get_all();
        dd($pertanyaan);
        return view('pertanyaan.index', compact('pertanyaan'));
    }

    public function create (){
        return view('pertanyaan.form');
    }
    public function store(Request $request){
        // dd($request->all());
        $data = $request->all();
        $pertanyaan = PertanyaanModel::save($data);
        if($pertanyaan){
            return view('/pertanyaan');
        }
    }
}

