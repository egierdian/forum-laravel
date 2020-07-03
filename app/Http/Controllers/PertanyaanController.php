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
}
