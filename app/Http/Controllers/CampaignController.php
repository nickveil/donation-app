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

    public function show(Campaign $campaign)
    {
        return view('campaign',[
            'campaign'=> $campaign
        ]);
    }

    public function getCampaign(Campaign $campaign)    
    {
        return 'Campaign Controller. Id is:'.$campaign->id;
    }
}
