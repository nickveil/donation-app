<?php

namespace App\Http\Controllers;

use App\Models\Donor;
use Illuminate\Http\Request;

class DonorController extends Controller
{
    public function show(Donor $donor)
    {
        // dd($donor);
        return view('dashboard', [
            'donors' => $donor
        ]);
    }
}
