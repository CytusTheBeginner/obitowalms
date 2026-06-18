<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pricing extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name',
        'duration',
        'price',
    ];

    public function transactions(): HasMany
    {
        return $this->hasMany(Transaction::class);
    }

    // method untuk cek susb yang aktif of user 
    public function isSubscribedByUser($user_id)
    {
        return $this->transactions()
            ->where('user_id', $user_id)
            ->where('is_paid', true)
            ->where('ended_at', '>=', now())
            ->exists();
    }
}
