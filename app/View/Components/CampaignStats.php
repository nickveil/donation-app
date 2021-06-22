<?php

namespace App\View\Components;

use App\Models\Campaign;
use App\Models\Donations;
use Illuminate\View\Component;

class CampaignStats extends Component
{
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */

    public function render()
    {
        // This works but I think it can be cleaned up
        
        $campaigns = Campaign::where('isActive', '=', 1)->get();
        $totalDonations =[];
        
        foreach($campaigns as $campaign){
            $donations =  Donations::where('campaigns_id','=',$campaign->id)->sum('donation_amount');
            $totalDonations[$campaign->id] = $donations; 
        };
        return view('components.campaign-stats', [
            'campaigns' => $campaigns,
            'donations' => $totalDonations,
        ]);

        return view('components.campaign-stats', [
            'campaigns' => $campaigns,
            // 'campaigns_id' => Donations::get('campaigns_id'),
            'donations' => $totalDonations,
            // 'donations' => Donations::whereColumn('campaigns_id', '=', 'campaigns.id')->sum('donation_amount'),
        ]);
    }

    
}
