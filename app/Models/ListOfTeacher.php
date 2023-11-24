<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListOfTeacher extends Model
{
    use HasFactory;

    protected $fillabel = ['teacherscol','full_name_of_the_teacher','specialization'];
}
