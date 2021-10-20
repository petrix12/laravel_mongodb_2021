<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
/* use Illuminate\Database\Eloquent\Model; */
use Jenssegers\Mongodb\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    protected $fillable = ['id', 'title', 'description'];
    protected $collection = 'books_collections';
}