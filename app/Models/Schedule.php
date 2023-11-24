<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;

    protected $fillabel = ['schedule_tab_id','day_id'];

    public function Schedule_tab()
    {
        return $this->belongsTo(Schedule_tab::Class,'schedule_tab_id','id');
    }

    public function Day()
    {
        return $this->belongsTo(Day::Class,'day_id','id');
    }
}
