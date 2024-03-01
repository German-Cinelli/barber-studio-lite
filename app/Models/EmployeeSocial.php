<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeSocial extends Model
{
    use HasFactory;

    public $table = 'employee_social';

    protected $fillable = [
        'employee_id',
        'social_id',
        'href'
    ];
}
