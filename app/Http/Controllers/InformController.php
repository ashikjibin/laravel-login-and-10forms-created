<?php

namespace App\Http\Controllers;

use App\Models\Inform;
use Illuminate\Http\Request;

class InformController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $informs = Inform::all();

        return view('informs.index', compact('informs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('informs.create');
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
            'name' => 'required',
            'email' => 'required',
            'address' => 'required',
            'city' => 'required',
            'state' => 'required',
            'country' => 'required',
            'zipcode' => 'required',
            'mobile' => 'required',
        ]);

        Inform::create($request->all());

        return redirect()->route('informs.index')->with('success','Inform created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Inform  $inform
     * @return \Illuminate\Http\Response
     */
    public function show(Inform $inform)
    {
      return view('informs.show',compact('inform'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Inform  $inform
     * @return \Illuminate\Http\Response
     */
    public function edit(Inform $inform)
    {
        return view('informs.edit',compact('inform'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Inform  $inform
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Inform $inform)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'address' => 'required',
            'city' => 'required',
            'state' => 'required',
            'country' => 'required',
            'zipcode' => 'required',
            'mobile' => 'required',
        ]);

        $inform->update($request->all());

        return redirect()->route('informs.index')->with('success','Inform updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Inform  $inform
     * @return \Illuminate\Http\Response
     */
    public function destroy(Inform $inform)
    {
      $inform->delete();

       return redirect()->route('informs.index')
       ->with('success','Inform deleted successfully');
    }
}