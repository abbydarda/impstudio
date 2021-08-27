<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;


class Merchants extends Model
{
    use HasFactory, HasApiTokens;

    protected $fillable = ['country_code','merchant_name','created_at'];

    public $timestamps = false;
    
    public function products()
    {
        return $this->hasMany(Products::class,'merchant_id','id');
    }
}
