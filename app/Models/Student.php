<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Student extends Model
{
    use HasFactory,  HasTranslations;
    protected $guarded=[];
    public $translatable = ['name'];

    public function gender(){
        return $this->belongsTo(Gender::class,'gender_id','id');
    }

    public function nationality(){
        return $this->belongsTo(nationalities::class, 'nationality_id','id');
    }

    public function bloodType(){
        return $this->belongsTo(type_blood::class, 'blood_id','id');
    }

    public function grade(){
        return $this->belongsTo(Grade::class, 'grade_id','id');
    }

    public function classRoom(){

        return $this->belongsTo(ClassRoom::class, 'classroom_id','id');
    }

    public function section(){
        return $this->belongsTo(Section::class, 'section_id','id');
    }
    public function parent(){

        return $this->belongsTo(my_parent::class, 'parent_id','id');
    }





}
