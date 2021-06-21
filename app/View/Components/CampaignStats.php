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
        return view('components.campaign-stats', [
            'campaigns' => Campaign::all(),
        ]);
    }
}
