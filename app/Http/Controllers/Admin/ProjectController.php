<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
Use App\Project;

class ProjectController extends Controller
{
    	public function index() 
    {
    	$projects = Project::withTrashed()->get();
        return view('admin.projects.index')->with(compact('projects'));
    }

    public function store(Request $request) 
    {
        $this->validate($request, Project::$rules, Project::$messages);
        Project::create($request->all());
        return back()->with('notification', 'Proyecto registrado correctamente');
    }

    public function edit($id) 
    {
    	$project=Project::find($id);
        $categories = $project->categories;
        $levels = $project->levels; //Level::where('project_id', $id)->get();
    	return view('admin.projects.edit')->with(compact('project', 'categories', 'levels'));
    }
        

    public function update($id, Request $request) 
    {
        $this->validate($request, Project::$rules, Project::$messages);
        Project::find($id)->update($request->all());
        return back()->with('notification', 'Proyecto modificado correctamente');
    }

    public function delete($id)
    {
    	Project::find($id)->delete();

    	return back()->with('notification', 'Proyecto deshabilitado correctamente');
    }

    public function restore($id)
    {
    	Project::withTrashed()->find($id)->restore();

    	return back()->with('notification', 'Proyecto habilitado correctamente');
    }
}
