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
        return view('components.campaign-stats', [
            'campaigns' => Campaign::where('isActive', '=', 1)->get(),
            // 'donations' => Donations::all(),
            'donations' => Donations::where('campaigns_id', '=', 3)->sum('donation_amount'),
        ]);
    }
}
