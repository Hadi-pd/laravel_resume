<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonalInfo extends Model
{
    //use HasFactory;
    protected $table='personal_infos';
    protected $fillable=[
         'name',
         'work_subject',
         'about',
         'Age',
         'email',
         'phone',
         'address',
         'image',
         'marital',
         'military',
    ];
}
