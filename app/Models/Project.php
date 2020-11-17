<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $table = 'projects';
    public $timestamps = true;

    // protected $casts = [
    //     'cost' => 'float'
    // ];

    protected $fillable = [
        'departement',
        'first_name',
        'last_name',
        'email',
        'gender',
        'ip_address',
        'created_at'
    ];
    protected $hidden     = ['id','created_at','updated_at'];
}

