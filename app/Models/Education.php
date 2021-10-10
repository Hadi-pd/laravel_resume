<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    protected $table='education';
    protected $fillable=[
         'education_subject',
         'college',
         'date',
         'description',
         'person_id',
    ];
}
