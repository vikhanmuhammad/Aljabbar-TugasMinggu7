<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pengingatModel extends Model
{
    use HasFactory;
    protected $table = 'tbpengingat';
    protected $fillable = ['id', 'imageurl', 'header', 'text'];
}
