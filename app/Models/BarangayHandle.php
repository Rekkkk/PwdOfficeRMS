<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BarangayHandle extends Model
{
    use HasFactory;

    protected $table = 'handle_barangay';

    public $timestamps = false;

    protected $fillable = [
        'account_id',
        'barangay_id'
    ];


    public function handle_barangay(){
        return $this->hasManyThrough(Account::class, Barangay::class);
    }
}
