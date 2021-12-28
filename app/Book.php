<?php

namespace App;

/* use Illuminate\Database\Eloquent\Model; */
use Jenssegers\Mongodb\Eloquent\Model;

class Book extends Model
{
    protected $primaryKey = '_id';
    protected $fillable = ['_id', 'title', 'description', 'age', 'category_id'];
    protected $collection = 'books_collection';

    // Relación 1:n Category - Book
    public function category(){
        return $this->belongsTo(Category::class);
    }

    // Relación n:m Tag - Book
    public function tags(){
        return $this->belongsToMany(Category::class);
    }
}