<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barangay extends Model
{
    use HasFactory;

    protected $table = 'barangays';

    public $timestamps = false;

    protected $fillable = [
        'barangay_name'
    ];

    public function account()
    {
		return $this->belongsToMany(Account::class)
        ->withPivot(['account_id']);
    }

}
