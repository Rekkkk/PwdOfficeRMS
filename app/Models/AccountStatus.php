<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccountStatus extends Model
{
    use HasFactory;

    protected $table = 'account_status';

    
    public $timestamps = false;

    protected $fillable = [
      
        'is_disable',
        'is_suspend'
    ];

    public function account(){
        return $this->belongTo(Account::class);
    }
}
