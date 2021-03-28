<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DogModel extends Model
{
    use HasFactory;
    protected $table = 'perritos';
    public $timestamps = false;
}
