<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class type_blood extends Model
{
    use HasFactory;

    protected $guarded=[];
    public $translatable = ['name'];


}
