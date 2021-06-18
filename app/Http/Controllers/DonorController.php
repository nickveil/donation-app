<?php

namespace App\Http\Controllers;

use App\Models\Donor;
use Illuminate\Http\Request;

class DonorController extends Controller
{
    public function donors()
    {
        return view('dashboard', [
            'donors' => Donor::where('category_id', '=', 1)
                                    ->paginate(5)
            // Donor::query("SELECT * FROM donors WHERE category_id = 1 ")
        ]);
    }

    public function show(Donor $donor)
    {
        return view('donor',[
            'donor'=> $donor
        ]);
    }
}
