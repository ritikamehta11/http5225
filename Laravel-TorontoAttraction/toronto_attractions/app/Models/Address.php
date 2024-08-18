<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    protected $table = 'addresses';

    // Specify which attributes can be mass assigned
    protected $fillable = [
        'street',
        'city',
        'postal_code',
    ];

    //relationship with attraction model
    public function attractions()
    {
        return $this->hasMany(Attraction::class);
    }
}
