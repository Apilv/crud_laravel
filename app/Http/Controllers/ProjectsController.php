<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function read()
    {
        return view('projects', ['projects' => \App\Projects::all()]);
    }

}
