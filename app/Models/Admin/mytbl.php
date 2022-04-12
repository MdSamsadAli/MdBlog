<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mytbl extends Model
{
    use HasFactory;


    

    protected $appends = [
        "image_path"
    ];

    function getImagePathAttribute(){
        if($this->image){
            return asset("uploads/admin/".$this->image);
        }
    }
}
