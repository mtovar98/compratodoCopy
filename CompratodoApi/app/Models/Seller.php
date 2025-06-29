<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Seller extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'store_name',
        'slug',
        'description',
        'logo',
        'banner',
        'sales_count',
        'is_active',
    ];

    /**
     * Relación: Un Seller pertenece a un User.
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
