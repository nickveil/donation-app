<?php

namespace App\Http\Controllers;

use App\Models\Donor;
use Illuminate\Http\Request;

class DonorController extends Controller
{
    public function donors()
    {
        return view('dashboard', [
            'donors' => Donor::paginate(5)
        ]);
    }

    public function show(Donor $donor)
    {
        return view('donor',[
            'donor'=> $donor
        ]);
    }
}
