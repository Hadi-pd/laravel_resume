<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SocialNetwork extends Model
{
    protected $table='social_networks';
    protected $fillable=[
        'name',
        'icon',
        'link',  
    ];
}
