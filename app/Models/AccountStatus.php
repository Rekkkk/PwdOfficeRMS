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
        'account_id',
        'is_disable',
        'is_suspend',
        'suspend_start',
        'suspend_start',
    ];

    public function account(){
        return $this->belongTo(Account::class, 'account_id');
    }
}
