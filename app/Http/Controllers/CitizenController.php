<?php

namespace App\Http\Controllers;

use App\Citizen;
use Illuminate\Http\Request;

class CitizenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $citizens= Citizen::all();
        
    return view('citizens.index',compact('citizens'));
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
            'citizen_fullname'   => 'required',
            'citizen_gender'     => 'required',
            'citizen_city'       => 'required',
            'citizen_nid'        => 'required|numeric|digits:10',
            'citizen_mobile'     => 'required',
            'citizen_address'    => 'required',

            

    ]);
        Citizen::create($request->all());
        return redirect('/citizens'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Citizen  $citizen
     * @return \Illuminate\Http\Response
     */
    public function show(Citizen $citizen)
    {
        $citizens= Citizen::all();
        return(view('citizens.index',compact('citizens')));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Citizen  $citizen
     * @return \Illuminate\Http\Response
     */
    public function edit(Citizen $citizen)
    {
      
        return(view('citizens.edit',compact('citizen')));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Citizen  $citizen
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Citizen $citizen)
    {
        /* if ($request->filled(['citizen_gender'])) {
            $citizen_gender = $request->input('citizen_gender');
        } else {
            $citizen_gender = Citizen::find($citizen)->citizen_gender;
        }

        Citizen::where("citizen_id", $citizen->citizen_id)->update([

            'citizen_fullname'   => $request->input('citizen_fullname'),
            'citizen_gender'     => $citizen_gender,
            'citizen_city'       => $request->input('citizen_city'),
            'citizen_nid'        => $request->input('citizen_nid'),
            'citizen_mobile'     => $request->input('citizen_mobile'),
            'citizen_address'    => $request->input('citizen_address'),


        ]); */
        $request->validate([
            'citizen_fullname'   => 'required',
            'citizen_gender'     => 'required',
            'citizen_city'       => 'required',
            'citizen_nid'        => 'required|numeric|digits:10',
            'citizen_mobile'     => 'required',
            'citizen_address'    => 'required',

            

    ]);
        $citizen->update($request->all());
        return redirect("/citizens");
         
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Citizen  $citizen
     * @return \Illuminate\Http\Response
     */
    public function destroy(Citizen $citizen)
    {
        $citizen->delete();

        return redirect('/citizens');
    }
}
