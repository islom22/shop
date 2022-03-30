<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'amount',
        'client_id'    
    ];
    public function client(){
        return $this->hasOne(Client::class, 'id', "client_id");
}
}

