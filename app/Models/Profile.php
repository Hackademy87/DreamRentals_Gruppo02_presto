<?php

namespace App\Models;

use App\Models\User;
use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Profile extends Model
{
    use HasFactory;

    public $fillable = [
        'nickname','role', 'user_id'
    ];

    public function user(){
       return $this->hasOne(User::class);
    }

   
}
