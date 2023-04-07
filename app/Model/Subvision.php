<?php

namespace Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subvision extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'IDView',
        'title',   
    ];
} 
