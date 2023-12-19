<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class _falihah extends Model
{
    use HasFactory;
    protected $table= "_falihah";
    protected $fillable= ['Nama', 'Email', 'No', 'Judul', 'Tanggal', 'Lama'];
}
