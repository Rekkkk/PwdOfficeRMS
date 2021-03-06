<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barangay extends Model
{
    use HasFactory;

    
    protected $table = 'barangays';

    public $timestamps = false;

    protected $primaryKey = 'barangay_id';

    protected $fillable = [
   
        'barangay_name'
    ];  

    public function account()
    {
		return $this->belongsToMany(Account::class, 'handle_barangay', 'barangay_id', 'account_id');
    }
    public function pwd(){
        return $this->hasOne(Pwd::class);
    }
}
