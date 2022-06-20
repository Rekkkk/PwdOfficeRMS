<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;

    protected $table = 'user_account';
    
    public $timestamps = false;

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }

    public function barangay()
    {
	    return $this->belongsToMany(Barangay::class);
      
    }
}

