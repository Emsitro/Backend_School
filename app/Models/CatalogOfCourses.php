<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CatalogOfCourses extends Model
{
    use HasFactory;

    protected $fillabel = ['number_of_lessons','price','topics_to_study','curriculum_id','name'];


    public function Curriculum()
    {
        return $this->belongsTo(Curriculum::Class,'curriculum_id','id');
    }
}
