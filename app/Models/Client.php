<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    protected $fillable = [
        'phone',
        'name',
        'family'    
    ];
  
public function product(){
    return $this->hasMany(Product::class);
}
}