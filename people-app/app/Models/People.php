<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class People extends Model
{
    use HasFactory;

    protected $table = 'people-app';

    protected $fillable = [
        'first_name',
        'last_name',
        'phone_number',
        'street',
        'city',
        'country',
    ];

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
