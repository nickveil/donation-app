<?php

namespace App\Http\Controllers;

use App\Models\Campaign;
use Illuminate\Http\Request;

class CampaignController extends Controller
{
    public function campaign()
    {
        return view('dashboard', [
            'campaigns' => Campaign::all(), 
            // Donor::query("SELECT * FROM donors WHERE category_id = 1 ")
        ]);
    }
}