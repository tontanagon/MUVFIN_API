<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class payment extends Model
{
    use HasFactory;
    protected $primaryKey = 'payment_id';

    protected $fillable = [
        'payment_id',
        'customer_id',
        'film_id',
        'total',
        'week'

    ];

    public function payment_to_customer()
    {
        return $this->belongsToMany(customer::class);
    }

    public function payment_to_film()
    {
        return $this->belongsTo(film::class);
    }


}
