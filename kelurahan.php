<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    use HasFactory;
    public $timestamps = falcer;
    protected $table = 'kelurahan';
    protected $fillable = ['id', 'nama', 'kecematan'];
}
