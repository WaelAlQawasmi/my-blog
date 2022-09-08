<?php

namespace App\Http\Controllers;

use App\Models\poste;
use Illuminate\Http\Request;

class PosteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
     $data=poste::all();
        $data=poste::latest()->paginate(4);

        return view('home',['my_name'=>'wael','data'=>$data]);
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
        'body'=>'required',
       

       ]);

       $post = poste::create($request->all());
       return redirect()->route('myPostes.index')
       ->with('success','product added successflly') ;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\poste  $poste
     * @return \Illuminate\Http\Response
     */
    public function show(poste $poste)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\poste  $poste
     * @return \Illuminate\Http\Response
     */
    public function edit(poste $poste)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\poste  $poste
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, poste $poste)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\poste  $poste
     * @return \Illuminate\Http\Response
     */
    public function destroy(poste $poste)
    {
        //
    }
}
