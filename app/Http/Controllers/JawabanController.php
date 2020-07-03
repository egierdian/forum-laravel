<?php

namespace App\Http\Controllers;
// use App\Jawaban;
// use App\Pertanyaan;
use Illuminate\Http\Request;

class JawabanController extends Controller
{
    public function index($id)
    {	
    	$pertanyaan = \App\Pertanyaan::find($id);
    	$jawaban = \App\Jawaban::all();
    	// dd($pertanyaan->jawaban);
    	return view('jawaban.index', ['pertanyaan' => $pertanyaan, 'jawaban'=> $jawaban]);
    }

    public function store(Request $request,$id)
    {
    	// dd($request->all());
    	$jawaban = new \App\Jawaban;
    	$jawaban->pertanyaan_id = $request->get('pertanyaan_id');
    	$jawaban->isi = $request->get('isi');
    	$jawaban->save();
    	// $jawaban = \App\Jawaban::create($request->all());
    	return redirect('/pertanyaan');
    }
}
