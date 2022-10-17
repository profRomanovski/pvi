<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Issuance extends Model
{
    use HasFactory;

    protected $fillable = [
        'book_id',
        'customer',
        'term'
    ];

    public function book()
    {
        return $this->belongsTo(Book::class);
    }
}
