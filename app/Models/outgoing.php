<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Outgoing extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'outgoings';
    protected $fillable = ['item_id', 'nama', 'kategori', 'harga', 'stock','satuan'];
}
