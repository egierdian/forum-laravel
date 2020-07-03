<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pertanyaan extends Model
{
    //table
    protected $table = 'pertanyaan';
    //field dalam table
    protected $fillable = ['isi','tanggal'];

    public function jawaban()
    {
        //membuat relasi
    	return $this->hasMany(Jawaban::class);
    }
}
