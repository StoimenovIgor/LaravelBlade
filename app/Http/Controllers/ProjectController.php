<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Auth\CreateProjectRequest;


use Illuminate\Http\Request;


class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::orderBy('id','desc')->get();
        
        return view('pages.adminPanel', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.create');
    }

       /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateProjectRequest $request)
    {
        Project::create($request->all());

        return to_route('create')->withSuccess('Продуктот е успешно додаден!');
    }

   /**
     * Display the specified resource.
     *
     * @param  \App\Models\Project $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Project $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        return view('pages.edit', compact('project'));
    }

       /**
     * Update the specified resource in storage.
     *
     * * @param  \App\Http\Requests\Auth\CreateProjectRequest $request
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(CreateProjectRequest $request, Project $project)
    {
        Project::update($request->all());       //NEZNAM KOJ GET E AMA NEMOZAM VEKE
        // $project->update($request->all());

        return view('pages.edit')->withSuccess('Продуктот е успешно ажуриран.');;
    }

      /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        $project->delete();

        return to_route('admin-panel')
            ->withSuccess("Успешно избришан производот: {$project->name}");
    }
}
