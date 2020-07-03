<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PertanyaanController extends Controller
{
    public function index(Request $req)
    {
    	// dd($req->all());
    	$pertanyaan = \App\Pertanyaan::all();
    	return view('pertanyaan.index', ['pertanyaan' => $pertanyaan]);
    }

    public function create()
    {
    	return view('pertanyaan.add');
    }

    public function store(Request $req)
    {
    	// dd($req->all());
    	$pertanyaan = \App\Pertanyaan::create($req->all());
    	return redirect('/pertanyaan');
    }

    public function edit(Request $req, $id)
    {
        $pertanyaan = \App\Pertanyaan::find($id);
        //dd($siswa); daydam buat ngecek saja.
        return view('pertanyaan.edit',['pertanyaan'=>$pertanyaan]);
    }

    public function update (Request $req, $id)
    {
        $pertanyaan = \App\Pertanyaan::find($id);
        $pertanyaan->update($req->all());
        return redirect('/pertanyaan');
    }

    public function delete($id)
    {
        $pertanyaan = \App\Pertanyaan::find($id);
        $pertanyaan->delete($pertanyaan);
        return redirect('/pertanyaan');
    }
}
