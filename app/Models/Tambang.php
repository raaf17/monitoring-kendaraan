<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tambang extends Model
{
    use HasFactory;
    protected $table = 'tambang';
    protected $fillable = ['nama_tambang', 'alamat', 'created_by', 'updated_by'];
    public $timestamps = true;
}
