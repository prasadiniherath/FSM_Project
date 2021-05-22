<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Product extends Model
{
    use HasFactory;
    protected$table='products';
    protected $primaryKey = 'productID';
    protected $fillable=[
        'product_Name',
        'cost_price',
        'sales_price',
        'labled_price',
        'weight',
        'Expire_date',
        'user_id',
        'category_id'

    ];

    public function categories(){
        return $this->belongsTo(Category::class, 'category_id', 'categoryID');
    }

    public function user(){
        return $this->belongsTo(User::class, 'user_id', 'userID');
    }


}

