<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;

    protected $fillable = ['name','merchant_id','price','status', 'created_at'];

    public $timestamps = false;
    
    public function merchants()
    {
        return $this->belongsTo(Merchants::class, 'merchant_id');
    }
}
