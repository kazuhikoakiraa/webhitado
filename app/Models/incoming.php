<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Incoming extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'incomings';
    protected $fillable = ['id','item_id', 'nama', 'kategori', 'harga', 'stock','satuan'];
}