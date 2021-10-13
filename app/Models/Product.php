<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Cart;
use App\Models\User;

class Product extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */

    protected $fillable = [
        'title',
        'description',
        'price',
        'stock',
        'status', 
    ];
    /**
     * The carts that belong to the Product
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function carts()
    {
        return $this->belongsToMany(Cart::class)->withPivot('quantity');
    }
    public function orders()
    {
        return $this->belongsToMany(Order::class)->withPivot('quantity');
    }

}
