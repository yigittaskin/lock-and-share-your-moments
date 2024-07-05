<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QrCode extends Model
{
    use HasFactory;

    protected $fillable = [
        'qr_id', 'email', 'password', 'name', 'lock_date', 'media', 'message'
    ];

    protected $casts = [
        'media' => 'array',
    ];
}
