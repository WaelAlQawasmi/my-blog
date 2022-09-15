<?php

namespace App\Http\Controllers;

use App\Models\projects;
use Illuminate\Support\Facades\File; 

use Illuminate\Http\Request;

class ProjectsController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = projects::all();
        return view('project-viow', ['data' => $data]);
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
        $request->validate(['name' => 'required', 'description' => 'required']);

        $fileName = "null";
        $projectNew = new projects();

        if ($request->hasFile('image')) {
            $img = $request->file('image');
            $extention = $img->getClientOriginalExtension();
            $fileName = time() . '.' . $extention;
            $img->move('uploded/', $fileName);
        }

        $projectNew->photo = $fileName;
        $projectNew->name=  $request->name;
        $projectNew->description= $request->description;

        $projectNew->save();
        return redirect()->route('myProjects.index')

            ->with('success', $projectNew->photo);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\projects  $projects
     * @return \Illuminate\Http\Response
     */
    public function show(projects $projects)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\projects  $projects
     * @return \Illuminate\Http\Response
     */
    public function edit($id)

    {
        $project = projects::find($id);
        return view('edit')->with('project', $project);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\projects  $projects
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)

    {
        $project = projects::find($id);
        $project->name = $request->name;
        $project->description = $request->description;
        $project->update();

        return redirect()->route('myProjects.index')

            ->with('success', 'project update successflly');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\projects  $projects
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $project = projects::find($id);
        $fileBath='uploded/'.$project->photo;
        File::delete($fileBath);
        
        $project->delete();
        return redirect()->route('myProjects.index')

            ->with('success', 'project Delete successflly');
    }
}
