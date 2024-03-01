<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Setting;

class Item extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'name',
        'slug',
        'price',
        'description',
        'image',
        'status'
    ];

    public function getPriceFormattedAttribute()
    {
        $currencySymbol = Setting::value('currency_symbol');
        return $currencySymbol . ' ' . number_format($this->attributes['price'], 2);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function service()
    {
        return $this->hasOne(Service::class);
    }
}
