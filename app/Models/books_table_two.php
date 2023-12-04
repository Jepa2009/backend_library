<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class books_table_two extends Model
{
    use HasFactory;
    protected $fillable = ['name','autor_id','genre_id'];

    public function Autor()
    {
        return $this->belongsTo(Autor::Class,'autor_id','id');
    }

    public function Genre()
    {
        return $this->belongsTo(Genre::Class,'genre_id','id');
    }
}
