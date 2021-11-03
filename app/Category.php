<?php

namespace App;

/* use Illuminate\Database\Eloquent\Model; */
use Jenssegers\Mongodb\Eloquent\Model;

class Category extends Model
{
    protected $primaryKey = '_id';
    protected $fillable = ['_id', 'title'];
    protected $collection = 'categories_collection';

    // Relación inversa 1:n Category - 
    public function books(){
        return $this->hasMany(Book::class);
    }
}