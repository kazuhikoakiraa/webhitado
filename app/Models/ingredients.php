<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ingredients extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'ingredients';
    protected $fillable = ['id','item_id', 'product_id'];
}
