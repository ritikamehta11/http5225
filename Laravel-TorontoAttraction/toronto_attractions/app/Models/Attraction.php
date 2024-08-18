<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attraction extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'category',
        'description',
        'address_id',
    ];
    // relationship with address model
    public function address()
    {
        return $this->belongsTo((Address::class));
    }
}
