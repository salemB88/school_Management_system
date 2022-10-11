<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class my_parent extends Model
{
    use HasFactory,  HasFactory,   HasTranslations;
    protected $guarded=[];
    public $translatable = ['father_name','mother_name'];
}
