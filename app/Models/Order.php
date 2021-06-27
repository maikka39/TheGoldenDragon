<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Order extends Model
{
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'date',
    ];

    public function menuItems(): BelongsToMany
    {
        return $this->belongsToMany(MenuItem::class, 'order_has_menu_items')->withPivot('amount');
    }
}
