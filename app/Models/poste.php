<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class poste extends Model
{
    use HasFactory;
    protected $fillable = ['body'];
    protected $dates = ['deleted_at'];
}
