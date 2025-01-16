<?php

namespace App\Http\Controllers;
use View;
use App\Models\joint;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class JointOldController extends Controller
{
    public function show()
    {
        return view('joint-degree');
    }
}
