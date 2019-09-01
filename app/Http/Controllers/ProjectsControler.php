<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use phpDocumentor\Reflection\Project;
use App\Project;

class ProjectsControler extends Controller
{
    public function index()
    {
        $projects = Project::all();
        //return $projects; - no need to use return twice, pass it to 'compact' function

        return view('projects.index', compact('projects'));
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
