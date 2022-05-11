<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\DocBlock\Description;

class Category extends Model
{
    protected $table = 'categorys';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'description'];

    public function Category() {
    return $this->hasMany(Product::class, 'id_category', 'id');
}

    use HasFactory;
}
