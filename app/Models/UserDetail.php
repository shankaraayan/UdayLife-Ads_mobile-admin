<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserDetail extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'phone',
        'total_earning',
        'total_withdraw',
        'withdraw_request',
        'withdraw_amount',
        'upi',
        'address',
        'refrel_by',
        'refrel_id',
    ];
}