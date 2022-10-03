<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class Section extends Model
{
    use HasFactory, SoftDeletes,  Notifiable;

    protected $guarded=[];


    public function classRoom(){
        return $this->belongsTo(ClassRoom::class,'classRoom_id','id');
    }


}
