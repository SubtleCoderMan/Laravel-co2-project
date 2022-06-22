<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bedrijven extends Model
{
    protected $table = 'bedrijven';
    use HasFactory;
    protected $fillable = ['bedrijfnaam', 'postcode', 'branche','werknemers','gebouwen','grondoppervlak','bouwoppervlak'];
}
