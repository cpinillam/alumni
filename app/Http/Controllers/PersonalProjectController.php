<?php

namespace App\Http\Controllers;

use App\PersonalProject;
use Illuminate\Http\Request;

class PersonalProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $projects= new PersonalProject();
        $personalProjects= $projects->getAllProjectsThatAreValidateAndPublic();
        
        return view('personalProjects',['personalProject'=>$personalProjects]);
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
        $data = $request->validate([
            'title'=> 'required',
            'description'=> 'required',
            'public' => 'required',
            'urlgithub'=> 'required'

        ]);
        $project = new PersonalProject();
        $project->title = $request->title;
        $project->description = $request->description;
        $project->public = $request->public;
        $project->urlgithub = $request->urlgithub;
        

        $project->save();

        return redirect('personalsprojects')->with('sucess', 'Project added!'); 

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PersonalProject  $personalProject
     * @return \Illuminate\Http\Response
     */
    public function show(PersonalProject $personalProject,$id)
    {
        
        $projects = PersonalProject::find($id);
        return view('projectDetail', ['project'=>$projects]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PersonalProject  $personalProject
     * @return \Illuminate\Http\Response
     */
    public function edit(PersonalProject $personalProject)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PersonalProject  $personalProject
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PersonalProject $personalProject)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PersonalProject  $personalProject
     * @return \Illuminate\Http\Response
     */
    public function destroy(PersonalProject $personalProject)
    {
        //
    }
}
