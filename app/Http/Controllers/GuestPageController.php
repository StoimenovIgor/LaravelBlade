<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class GuestPageController extends Controller
{
    public function index()
    {
        $projects = Project::orderBy('id','desc')->get();
        
        return view('pages.index', compact('projects'));
    }
}
