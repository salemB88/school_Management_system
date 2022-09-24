<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class Grade extends Model
{
    use HasFactory, SoftDeletes,  Notifiable;

    public $fillable= [
        'name',
        'description',
    ];
}
