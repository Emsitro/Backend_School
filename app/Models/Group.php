<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;

    protected $fillabel = ['full_name_of_the_student','parent_number','contract_id'];

    public function Contract()
    {
        return $this->belongsTo(Contract::Class,'contract_id','id');
    }

}
