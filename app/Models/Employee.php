<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'image',
        'status'
    ];

    /**
     * Información personal
     */
    public function personal_information()
    {
        return $this->hasOne(PersonalInformation::class);
    }

    /**
     * Redes sociales
     */
    public function socials()
    {
        return $this->belongsToMany(Social::class)->withPivot('id', 'href');
    }

    /**
     * Horarios de atención
     */
    public function schedules()
    {
        return $this->hasMany(Schedule::class);
    }

    /**
     * Agendas
     */
    public function appointments()
    {
        return $this->hasMany(Appointment::class);
    }

    /**
     *
     */
    public function serving()
    {
        return $this->hasOne(Appointment::class)
            ->where('status_id', 4)
            ->orderBy('created_at', 'asc');
    }
}
