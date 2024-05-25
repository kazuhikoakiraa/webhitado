<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Meja extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'mejas';
    protected $fillable = ['id','nomor_meja'];
}
