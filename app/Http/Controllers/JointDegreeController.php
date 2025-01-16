<?php

namespace App\Http\Controllers;
use View;
use App\Models\joint;
use App\Models\joint2;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JointDegreeController extends Controller
{
    public function show()
    {
        return view('joint-degree')
        ->with('joint' ,  joint::all())
        ->with('joint2', joint2::all());
    }
}
