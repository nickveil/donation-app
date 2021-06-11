<?php

namespace App\Http\Controllers;

use App\Models\Donor;
use Illuminate\Http\Request;

class DonorController extends Controller
{
    public function donors()
    {
        return view('donors', [
            'donors' => Donor::all()
        ]);
    }
}
