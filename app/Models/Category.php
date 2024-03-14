<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Movie;
class Category extends Model
{
    use HasFactory;
    protected $fillable =['title'];

    public function movies(){
        return $this->hasmany(Movie::class);
    }
}
