<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'item_id',
        'duration_time'
    ];

    public function item()
    {
        return $this->belongsTo(Item::class);
    }

    public function appointments()
    {
        return $this->belongsToMany(Appointment::class, 'appointment_service', 'service_id', 'appointment_id');
    }
}
