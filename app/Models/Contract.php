<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
    use HasFactory;

    protected $fillabel = ['full_name_of_the_student','parents_full_name','price','parent_number','date_start_of_training','catalog_of_cousrses_id'];

    public function Catalog_of_cousrses()
    {
        return $this->belongsTo(Catalog_of_cousrses::Class,'catalog_of_cousrses_id','id');
    }
}
