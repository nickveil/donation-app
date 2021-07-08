<?php

namespace App\Http\Controllers;

use App\Models\Donor;
use Illuminate\Http\Request;

class DonorController extends Controller
{
    public function donors()
    {
        return view('dashboard', [
            'donors' => Donor::paginate(5),
            // 'companies' => Donor::where('category_id', '=', 1)->paginate(5),
            // 'families' => Donor::where('category_id', '=', 2)->paginate(5),
            // 'friends' => Donor::where('category_id', '=', 3)->paginate(5),
            // Donor::query("SELECT * FROM donors WHERE category_id = 1 ")
        ]);
    }

    public function show(Donor $donor)
    {
        return view('donor',[
            'donor'=> $donor
        ]);
    }

    public function edit(Donor $donor)    
    {
        return view('components.update-donor', [
            'donor' => $donor
        ]);
    }

    public function update(Donor $donor, Request $request )    
    {

        $donor->name = $request->name;
        $donor->primary_contact_name = $request->primary_contact_name;
        $donor->pc_phone_number = $request->pc_phone_number ;
        $donor->pc_email = $request->pc_email;
        $donor->save();

        return redirect('/donor/'.$donor->id);
    }
}