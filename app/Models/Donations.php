<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donations extends Model
{
    use HasFactory;

    public function campaign()
    {
        return $this->belongsTo(Campaign::class);
    }

    public function Donor()
    {
        return $this->hasMany(Donor::class);
    }
}
