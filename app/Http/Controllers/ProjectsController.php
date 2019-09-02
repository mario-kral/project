<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use phpDocumentor\Reflection\Project;
use App\Project;

class ProjectsController extends Controller
{
    public function index()
    {
        $projects = Project::all();
  //      return $projects; - no need to use return twice, pass it to 'compact' function (this 'return' will return array in json)

        return view('projects.index', compact('projects'));
    }

    public function create()
    {
        return view('projects.create');
    }

    public function store()
    {
        $project = new Project();
        $project->title = request('title');
        $project->description = request('description');
        $project->save();
        return redirect('/projects');
    }

    public function home()
    {
        return view('welcome', [
        'foo' => 'foobar'
        ]);
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
       return view('contact');
    }
}
