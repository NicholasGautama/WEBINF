<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaboratoriumController extends Controller
{
    public function show()
    {
        // $data = laboratorium::all();
        // return view('laboratorium', ['laboratorium'=>$data]);
        $data = [
            [
                'name' => 'Software Engineering',
                'description' => 'Focuses on the development of reliable and efficient software systems.',
                'contact' => 'se_contact@umn.ac.id',
                'link' => 'https://se.umn.ac.id'
            ],
            [
                'name' => 'Game Developer',
                'description' => 'Specializes in creating engaging and interactive games.',
                'contact' => 'gd_contact@umn.ac.id',
                'link' => 'https://gd.umn.ac.id'
            ],
            [
                'name' => 'Cyber Security',
                'description' => 'Dedicated to protecting computer systems and networks from cyber threats.',
                'contact' => 'cs_contact@umn.ac.id',
                'link' => 'https://cs.umn.ac.id'
            ],
            [
                'name' => 'Artificial Intelligence',
                'description' => 'Focuses on the creation and application of intelligent systems.',
                'contact' => 'ai_contact@umn.ac.id',
                'link' => 'https://ai.umn.ac.id'
            ]
        ];

        return view('laboratorium', ['laboratorium' => $data]);
    }
}
