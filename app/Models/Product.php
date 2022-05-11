<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Product extends Model
{
    protected $table = 'products';
    protected $primaryKey ='id';
    protected $fillable = ['image','id_category', 'name', 'price'];

    public function category () {
        return $this->belongsTo(Category::class);
    }
    use HasFactory;
}
