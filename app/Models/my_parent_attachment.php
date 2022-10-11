<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;


class my_parent_attachment extends Model
{
    protected $appends=['file_path'];
    use HasFactory;


    public function getFilePathAttribute()
    {
        return config('app.url').Storage::url('parents/'.$this->my_parent_id.'/'.$this->file_name);
    }


    public function getFilePublicPath(){
        return 'parents/'.$this->my_parent_id.'/'.$this->file_name;
    }
}
