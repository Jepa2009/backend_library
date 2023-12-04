<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class books_tabl extends Model
{
    use HasFactory;
    protected $fillable = ['received_books_id','autor_id','genre_id'];

    public function Received_books()
    {
        return $this->belongsTo(Received_books::Class,'received_books_id','id');
    }

    public function Autor()
    {
        return $this->belongsTo(Autor::Class,'autor_id','id');
    }

    public function Genre()
    {
        return $this->belongsTo(Genre::Class,'genre_id','id');
    }
}

