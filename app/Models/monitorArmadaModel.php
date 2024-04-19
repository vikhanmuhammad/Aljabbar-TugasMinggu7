<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class monitorArmadaModel extends Model
{
    use HasFactory;

    protected $table = 'tbmonitor';
    protected $fillable = ['id', 'imageurl', 'header', 'text'];
}
