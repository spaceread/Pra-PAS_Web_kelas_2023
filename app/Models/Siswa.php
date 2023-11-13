<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiswaData extends Model
{
    use HasFactory;

    protected $table = 'siswas';
    protected $primaryKey = 'your_primary_key';

    protected $fillable = ['name', 'age'];

    public $timestamps = false;
}