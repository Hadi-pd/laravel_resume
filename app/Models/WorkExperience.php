<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkExperience extends Model
{
    protected $table='work_experiences';
    protected $fillable=[
         'work_name',
         'company_name',
         'date',
         'description',
         'person_id',
    ];
}
