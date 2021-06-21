<?php

namespace App\View\Components;

use App\Models\Campaign;
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
        $donations = [25,150,100,450,700,40,900,12000,85,25,675];
        return view('components.campaign-stats', [
            'campaigns' => Campaign::where('isActive', '=', 1)->get(),
            'donations' =>array_sum($donations),
        ]);
    }
}
