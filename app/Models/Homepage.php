<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Homepage extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['section','description','img'];
    protected $table = 'homepages';
}
