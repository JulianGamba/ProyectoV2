<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class test extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_test';
    protected $table = 'test';
    public $timestamps = false;
}
