<?php

namespace App\Http\Controllers;

use App\Models\Donor;
use Illuminate\Http\Request;

class DonorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $donors = Donor::latest()->paginate(20);
        return view('donor.show', \compact('donors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Users.User');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'bloodgroup'=> 'required',
            'CNI'=> 'required',
            'location'=> 'required'
        ]);
        

        $Donor = new Donor;
        $Donor->bloodgroup = $request->bloodgroup;
        $Donor->CNI = $request->CNI;
        $Donor->location =$request->location;
        $Donor->donor_id =auth()->id();
        $Donor->save();
        // session::flash('message', 'Category Created Succesfully');
        // session::flash('alert-class', 'alert-success');
        return back();
    
    }

    public function confirm($id)
    {
        $confirm = donor::where('id','=',$id)->update(['status'=>'confirmed']);
        return back(); 
    }

    public function canceld($id)
    {
        $confirm = donor::where('id','=',$id)->update(['status'=>'canceld']);
        return back(); 
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Donor  $donor
     * @return \Illuminate\Http\Response
     */
    public function show(Donor $donor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Donor  $donor
     * @return \Illuminate\Http\Response
     */
    public function edit(Donor $donor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Donor  $donor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Donor $donor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Donor  $donor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Donor $donor)
    {
        //
    }
}
