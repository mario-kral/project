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

    public function show(Project $project)
    {
        return view('projects.show', compact('project'));
    }

    public function edit(Project $project)
    {
        return view('projects.edit', compact('project'));
    }

    public function update(Project $project)
    {
        $project->update(\request(['title','description'])); //this is equivalent of the code below
/*      $project->title = request('title');
        $project->description = request('description');
        $project->save();
*/
        return redirect('/projects');
    }

    public function destroy(Project $project)
    {
        $project->delete();
        return redirect('/projects');
    }

    public function store()
    {
        Project::create(request(['title','description']));
        return redirect('/projects');
        /*
                dd(\request()->all()); // returns all
                dd(\request(['title','description'])); // returns array with the key ('\request' and 'request' is the same)
                dd(\request(['title'])); // returns array with the key properly set ('\request' and 'request' is the same)
                dd(request('title')); //returs variable
                dd(['title','description']) ; // returns array
                dd([ // returns array
                    'title' => request('title'),
                    'description' => request('description')
                ]);
                return [ // returns array in json format
                    'title' => request('title'),
                    'description' => request('description')
                ];

                Project::create([ // this is simpler version of commented out code below
                    'title' => request('title'),
                    'description' => request('description')
                ]);

                $project = new Project();
                $project->title = request('title');
                $project->description = request('description');
                $project->save();
                return redirect('/projects');
         */
    }
}
