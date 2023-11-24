<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TuitionPayment extends Model
{
    use HasFactory;

    protected $fillabel = ['price','contract_id','catalog_of_courses_id'];

    public function Contract()
    {
        return $this->belongsTo(Contract::Class,'contract_id','id');
    }

    public function Catalog_of_courses()
    {
        return $this->belongsTo(Catalog_of_courses::Class,'catalog_of_courses_id','id');
    }
}
