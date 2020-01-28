<?php

namespace App\Http\Controllers;
use App\Http\Controllers;
use App\Posts;
use App\User;
use App\Http\Controllers\Controller;
use App\Http\Requests\PostFormRequest;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function index ()
    {
    	$projects = Project::all();

    	return view('project.index', compact('projects'));
	}

	public function store()
	{
		return request()->all();
	}
}