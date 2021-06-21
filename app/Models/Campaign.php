<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Campaign extends Model
{
    use HasFactory;
    
    public function user()
    {
        return $this->hasMany(User::class);
    }

    public function donations()
    {
        return $this->hasMany(Donations::class);
    }
}
