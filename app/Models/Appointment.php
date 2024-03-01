<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_id',
        'employee_id',
        'status_id',
        'type_id',
        'name',
        'type',
        'start_time',
        'end_time'
    ];

    public function getFreeTimeSlots($employeeId)
    {
        // Obtener todos los appointments relacionados con el empleado
        $appointments = Appointment::where('employee_id', $employeeId)
            ->orderBy('start_time')
            ->get();

        // Inicializar un arreglo con el horario completo del día
        $fullDaySchedule = collect([
            ['start' => '00:00', 'end' => '23:59'],
        ]);

        // Calcular los horarios libres
        $freeTimeSlots = $fullDaySchedule->diff($appointments->pluck('start_time')->zip($appointments->pluck('end_time')));

        // Formatear los resultados según tus necesidades
        $formattedFreeTimeSlots = $freeTimeSlots->map(function ($slot) {
            return [
                'start' => Carbon::parse($slot[0])->format('H:i'),
                'end' => Carbon::parse($slot[1])->format('H:i'),
            ];
        });

        return response()->json($formattedFreeTimeSlots);
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }

    public function services()
    {
        return $this->belongsToMany(Service::class, 'appointment_services', 'appointment_id', 'service_id');
    }

    public function status()
    {
        return $this->belongsTo(Status::class);
    }

    public function type()
    {
        return $this->belongsTo(Type::class);
    }
}
