<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use SoftDeletes, HasFactory;

    protected $fillable = ['name', 'description', 'price', 'category_id', 'img', 'is_active', 'created_at', 'update_at'];
    protected $dates = ['deleted_at'];


    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function order_Items()
    {
        return $this->hasMany(OrderItem::class);
    }
}
