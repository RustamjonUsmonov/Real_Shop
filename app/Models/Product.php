<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table='products';
    protected $fillable=['name','descr','price','sale','catedory_id'];

    public static function sales(): int
    {
        return Product::where('sale',1)->count();
    }
}
