<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Rental extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'car_id',
        'pickup_location',
        'drop_off_location',
        'start_date',
        'end_date',
        'total_cost ',
        'status ',
        'created_at',
        'updated_at',
    ];

    public function users() :BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    public function cars() :BelongsTo
    {
        return $this->belongsTo(Car::class, 'car_id', 'id');
    }
}
