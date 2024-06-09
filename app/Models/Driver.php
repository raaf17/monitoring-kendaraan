<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    use HasFactory;
    protected $table = 'driver';
    protected $fillable = ['nama_driver', 'alamat', 'created_by', 'updated_by'];
    public $timestamps = true;
}
