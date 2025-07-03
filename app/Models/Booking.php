<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    // Tabel yang digunakan (opsional jika nama model dan tabel cocok)
    protected $table = 'bookings';

    // Kolom yang boleh diisi massal (mass assignment)
    protected $fillable = [
        'name',
        'email',
        'phone',
        'date',
        'time',
        'people',
        'message',
    ];
}
