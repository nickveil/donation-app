<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donor extends Model
{
    use HasFactory;

    protected $gaurded = [];

    // public function showall()
    // {
    //     return Donor::all();
    // }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
