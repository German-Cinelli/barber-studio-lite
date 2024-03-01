<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonalInformation extends Model
{
    use HasFactory;

    protected $fillable = [
        'employee_id',
        'document',
        'location',
        'address',
        'phone'
    ];

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }
}
