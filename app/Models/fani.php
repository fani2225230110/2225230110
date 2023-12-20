<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class fani extends Model
{
    use HasFactory;
    protected $table = "fani";
    protected $fillable= ['name', 'email', 'password', 'nomortelepon'];
}
