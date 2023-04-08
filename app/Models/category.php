<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    use HasFactory;


    public function books(){
        return $this->hasMany(Book::class, 'category_id' );
    }
}
