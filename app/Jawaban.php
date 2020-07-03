<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jawaban extends Model
{
    //table
    protected $table = 'jawaban';
    //field dalam table
    protected $fillable = ['id_pertanyaan','isi'];


    public function pertanyaan()
    {
        //membuat relasi 
    	return $this->belongsTo(Pertanyaa::class);
    }
}
