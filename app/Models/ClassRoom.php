<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class ClassRoom extends Model
{
    use HasFactory, SoftDeletes,  Notifiable;

    public $fillable= [
        'name',
        'grade_id',
        'description',
    ];

    public function grade(){
        return $this->belongsTo(Grade::class,'grade_id','id');
    }
}
