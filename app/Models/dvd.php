<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dvd extends Model
{
    use HasFactory;

    protected $table = 'dvd';
    protected $fillable = ['dvd_code', 'img_url', 'harga', 'title', 'rilis', 'durasi', 'produser', 'deskripsi', 'status'];
};
