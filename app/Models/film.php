<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class film extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'category_id',
        'price',
        'length',
        'rating',
        'actor',
        'imgUrl'

    ];

    public function film_to_film_text()
    {
        return $this->hasOne(film_text::class);
    }

    public function film_to_payment()
    {
        return $this->hasMany(payment::class ,'film_id');
    }

}
