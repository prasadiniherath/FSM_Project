<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserType extends Model
{
    use HasFactory;
    protected $table = "usertypes";
    protected $primaryKey = 'user_typeID';
    protected $fillable = [
        'user_type_name'
    ];
}
