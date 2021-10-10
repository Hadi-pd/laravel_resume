<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfessionalSkill extends Model
{
    //use HasFactory;
    protected $table='professional_skills';
    protected $fillable=[        
        'skill',
        'percent',
        'person_id',
    ];
}
