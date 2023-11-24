<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ScheduleTab extends Model
{
    use HasFactory;

    protected $fillabel = ['cabinet','time','magazine_groups_id','list_of_teachers_id'];

    public function Magazine_groups()
    {
        return $this->belongsTo(Magazine_groups::Class,'magazine_groups_id','id');
    }

    public function List_of_teachers()
    {
        return $this->belongsTo(List_of_teachers::Class,'list_of_teachers_id','id');
    }
}
