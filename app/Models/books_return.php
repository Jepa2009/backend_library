<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class books_return extends Model
{
    use HasFactory;
    protected $fillable = ['name','reader_id','address','number','books_table_two_id'];

    public function Reader()
    {
        return $this->belongsTo(Reader::Class,'reader_id','id');
    }

    public function Books_table_two()
    {
        return $this->belongsTo(Books_table_two::Class,'books_table_two_id','id');
    }
}
