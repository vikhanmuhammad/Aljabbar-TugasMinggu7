<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class selengkapnyaModel extends Model
{
    use HasFactory;

    protected $table = 'tbselengkapnya';
    protected $fillable = ['id', 'imageurl', 'header', 'text'];
}
