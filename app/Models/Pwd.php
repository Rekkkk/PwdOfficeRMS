<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pwd extends Model
{
    use HasFactory;

    protected $table = 'pwd';

    public $timestamps = false;


    public function barangay(){
        return $this->hasOne(Barangay::class);
    }
}
