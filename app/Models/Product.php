<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    use HasFactory;

    /**
     * Get all of the wishlist for the Product
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function wishlist(): HasMany
    {
        return $this->hasMany(Wishlist::class);
    }
}
