<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $primaryKey = 'appointment_id';

    protected $table = 'appointment';

    protected $fillable = [
        'appointment_id',
        'transaction',
        'appointment_date'
    ];  

    public function applicant()
    {
        return $this->hasOne(NewApplicant::class, 'appointment_id');
    }


}

