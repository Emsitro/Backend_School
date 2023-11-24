<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MagazineGroup extends Model
{
    use HasFactory;

    protected $fillabel = ['group_id','name'];

    public function Group()
    {
        return $this->belongsTo(Group::Class,'group_id','id');
    }
}
