<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;

    protected $table = 'accounts';
    
    public $timestamps = false;

    protected $fillable = [
        'email',
        'password',
        'is_super_admin',
        'user_id'
    ];

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }

    public function barangay()
    {
	    return $this->belongsToMany(Barangay::class);
    }
}

