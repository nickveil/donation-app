<?php

namespace App\Http\Controllers;

use App\Models\Campaign;
use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;

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

    public function edit(Campaign $campaign)    
    {
        return view('components.update-campaign', [
            'campaign' => $campaign
        ]);
    }

    public function update(Campaign $campaign, Request $request )    
    {

        $campaign->name = $request->name;
        $campaign->earmark = $request->earmark;
        $campaign->goal = $request->goal;
        $campaign->save();

        // dd($campaign);
        
        // $campaign->update([
        //     // 'name'=> $request->name,
        //     'earmark'=> $request->earmark,
        //     'goal'=> $request->goal,
        //     ]);
            // dd($request->earmark);
        return redirect('/campaign/'.$campaign->id);
    }
}
