<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'request_contact'=> 'required',
            'request_location'=> 'required',
            'request_quantity'=> 'required'
        ]);
        

        $Patient = new Patient;
        $Patient->bloodgroup = $request->bloodgroup;
        $Patient->request_contact = $request->request_contact;
        $Patient->request_location =$request->request_location;
        $Patient->request_quantity =$request->request_quantity;
        $Patient->patient_id =auth()->id();
        $Patient->save();
        // session::flash('message', 'Category Created Succesfully');
        // session::flash('alert-class', 'alert-success');
        return back();
    
    }
    public function confirm($id)
    {
        $confirm = patient::where('id','=',$id)->update(['status'=>'confirmed']);
        return back(); 
    }

    public function canceld($id)
    {
        $confirm = patient::where('id','=',$id)->update(['status'=>'canceld']);
        return back(); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function show(Patient $patient)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function edit(Patient $patient)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Patient $patient)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function destroy(Patient $patient)
    {
        //
    }
}
