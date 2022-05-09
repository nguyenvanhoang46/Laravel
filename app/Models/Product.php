<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Product extends Model
{
    protected $table = 'product';
    protected $primaryKey ='id';
    protected $fillable = ['id_category', 'name', 'price', 'quantity', 'image'];

    public function category () {
        return $this->belongsTo(Category::class);
    }
    use HasFactory;
}
