<?php

namespace App\View\Components;

use App\Models\Donations;
use Illuminate\View\Component;

class DonationsTable extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.donations-table',[
            'donationList' => Donations::where('donors_id','=',1)->get()
        ]);
    }
}
