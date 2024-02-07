<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class film_text extends Model
{

    use HasFactory;


    public function film_text_to_film()
    {
        return $this ->hasOne(film::class);
    }

}
