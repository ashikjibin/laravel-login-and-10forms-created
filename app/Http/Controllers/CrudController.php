<?php

namespace App\Http\Controllers;

use App\Models\Crud;
use Illuminate\Http\Request;

class CrudController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cruds = Crud::all();

        return view('cruds.index', compact('cruds'));
    }

    /**
     * Show the new for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('cruds.create');
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
            'index' => 'required',
            'headline' => 'required',
            'topics' => 'required',
            'description' => 'required',
            'comments' => 'required',
            
        ]);

        Crud::create($request->all());

        return redirect()->route('cruds.index')->with('success','Crud created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Crud  $crud
     * @return \Illuminate\Http\Response
     */
    public function show(Crud $crud)
    {
      return view('cruds.show',compact('crud'));
    }

    /**
     * Show the new for editing the specified resource.
     *
     * @param  \App\Models\Crud  $crud
     * @return \Illuminate\Http\Response
     */
    public function edit(Crud $crud)
    {
        return view('cruds.edit',compact('crud'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Crud  $crud
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Crud $crud)
    {
        $request->validate([
            'index' => 'required',
            'headline' => 'required',
            'topics' => 'required',
            'description' => 'required',
            'comments' => 'required',
            
        ]);

        $crud->update($request->all());

        return redirect()->route('cruds.index')->with('success','Crud updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Crud  $crud
     * @return \Illuminate\Http\Response
     */
    public function destroy(Crud $crud)
    {
      $crud->delete();

       return redirect()->route('cruds.index')
       ->with('success','Crud deleted successfully');
    }
}