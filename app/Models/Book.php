<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
/* use Illuminate\Database\Eloquent\Model; */
use Jenssegers\Mongodb\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $primaryKey = '_id';
    protected $fillable = ['_id', 'title', 'description', 'age'];
    protected $collection = 'books_collection';
}