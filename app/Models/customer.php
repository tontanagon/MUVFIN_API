<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'email',
        'phone',
        'status'

    ];


    public function customer_to_payment()
    {
        return $this->hasMany(payment::class);
    }

    public function customer_to_User()
    {
        return $this->belongsTo(User::class);
    }



}
