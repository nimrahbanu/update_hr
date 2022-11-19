<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Designation extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * 
     */
    protected $fillable = [
        'name',
        'deleted_date',
    ];
}
