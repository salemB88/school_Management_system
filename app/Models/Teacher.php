<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Teacher extends Model
{
    use HasFactory,  HasFactory,   HasTranslations;
    protected $guarded=[];
    public $translatable = ['name'];

    public function gender(){
        return $this->belongsTo(Gender::class,'gender_id','id');
    }

    public function specialization(){
        return $this->belongsTo(Specialization::class,'specialization_id','id');
    }

    public function sections(){
        return $this->belongsToMany(Section::class,'teacher_sections');
    }
}
