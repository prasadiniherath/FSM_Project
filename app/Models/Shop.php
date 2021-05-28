<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    use HasFactory;
    protected $table='shops';
    protected $primaryKey = "ShopID";
    protected $fillable=[
        'shop_name',
        'owner_name',
        'owner_NIC',
        'lat',
        'Lng',
        'image',
        'address_no',
        'suburb',
        'city',
        'district',
        'source',
        'status',
        'telephone_numbers',
        'registered_date',
        'due_dates',
        'user_id',
        'RouteID'
    ];

    public function route(){
        return $this->belongsTo(Route::class, 'RouteID', 'RouteID');
    }

    public function user(){
        return $this->belongsTo(User::class, 'user_id', 'userID');
    }

    public function unproductive(){
        return $this->hasMany(Unproductive::class, 'shop_ID', 'Shop_ID');
    }

}



