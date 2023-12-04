<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class readers_ticket extends Model
{
    use HasFactory;
    protected $fillable = ['reader_id','address','number','books_tabl_id'];

    public function Reader()
    {
        return $this->belongsTo(Reader::Class,'reader_id','id');
    }

    public function Books_tabl()
    {
        return $this->belongsTo(Books_tabl::Class,'books_tabl_id','id');
    }
}
