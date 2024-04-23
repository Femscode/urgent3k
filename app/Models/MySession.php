<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MySession extends Model
{
    use HasFactory;
    protected $table = 'my_sessions';
    protected $guarded = [];

}
