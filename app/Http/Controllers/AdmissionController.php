<?php

namespace App\Http\Controllers;

use View;
use App\Models\admission;
use App\Models\admission1;
use App\Models\admission1table;
use App\Models\admission2;
use App\Models\admission2table;
use App\Models\admission4;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;

class AdmissionController extends Controller
{
    public function show()
    {
        $images = [
        'pendaftaran-online-1.png',
        'pendaftaran-online-2.png',
        'pendaftaran-online-3.png',
        'pendaftaran-online-4.png',
        'pendaftaran-online-5.png',
        ];
        $caption = [
            'Click on the following image to get the Online Registration Form link',
            'Complete the Online Registration Form Check your form once again before pressing the "Submit" button',
            'Registration Fee: Regular Lecture Rp 100.000,- (one hundred thousand rupiah) can be transferred to: Virtual Account account listed after you finish filling out the Online Registration Form',
            'Please email proof of deposit / transfer along with the name of the prospective student to e-mail admisi@umn.ac.id (*Files cannot be processed without Registration Payment)',
            'Receive a New Student Admission Decision Letter if declared to have passed the selection, according to the entry path taken. (Contents of Decision Letter: Payment scheme info, NIM, Scholarship Terms & Conditions and next step information)'
        ];
        $links =[
            'https://pmb.umn.ac.id/pmb/web/',
            '',
            '',
            '',
            '',
        ];
        return view::make('admission', compact('images','caption','links'))
        ->with('admission1' ,  admission1::all())
        ->with('admission1table' ,  admission1table::all())
        ->with('admission2' ,  admission2::all())
        ->with('admission2table' ,  admission2table::all())
        ->with('admission4' ,  admission4::all());
    }
	    public function showadmin()
    {
    return view::make('admin.adminadmission')
    ->with('admission1' ,  admission1::all())
    ->with('admission1table' ,  admission1table::all())
    ->with('admission2' ,  admission2::all())
    ->with('admission2table' ,  admission2table::all())
    ->with('admission4' ,  admission4::all());

    }  
    public function editadmission(Request $request, $id)
    {
        $data = admission1::findOrFail($id);
        return view('admin.adminedit-admission1',['admission1'  => $data]);
    }


    public function updateadmission(Request $request, $id)
    {

        $data = admission1::findOrFail($id);
        $newName = $data->image; 

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $newName = 'Admission' . '.' . $extension;
            $file->storeAs('public/Admission', $newName);
        }

        $data->judul = $request->input('judul');
        $data->image = $newName;

        $data->save();

        return redirect('/adminadmission');
    }

    public function editadmission2(Request $request, $id)
    {
        $data = admission2::findOrFail($id);
        return view('admin.adminedit-admission2',['admission2'  => $data]);
    }
    public function updateadmission2(Request $request, $id)
    {
        $data = admission2::findOrFail($id);

        $data->update($request->all());
        return redirect('/adminadmission');
    }

    public function editadmission4(Request $request, $id)
    {
        $data = admission4::findOrFail($id);
        return view('admin.adminedit-admission4',['admission4'  => $data]);
    }


    public function updateadmission4(Request $request, $id)
    {

        $data = admission4::findOrFail($id);
        $newName = $data->image; 

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $newName = $request->input('judul') . '.' . $extension;
            $file->storeAs('public/Admission', $newName);
        }

        $data->judul = $request->input('judul');
        $data->isi = $request->input('isi');
        $data->image = $newName;

        $data->save();

        return redirect('/adminadmission');
    }
////////////////////////////////////////////////////
    public function createadmission4()
    {
        return view('admin.adminadd-admission4');
    }

    public function storeadmission4(Request $request)
    {
        
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $newName = $request->input('judul') . '.' . $extension;
            $file->storeAs('public/Admission', $newName);
        }
        
                
        $admission4 = admission4::create([
            'judul' => $request->input('judul'),
            'isi' => $request->input('isi'),
            'image' => $newName
        ]);
        
        $admission4->save();
           
        return redirect('/adminadmission');
    }
    /////////////////////
        public function deleteadmission4($id)
    {
        $data = admission4::findOrFail($id);
        return view('admin.admindelete-admission4',['admission4'  => $data]);
    }

    public function destroyadmission4($id)
    {
        $deleteData =  DB::table('admission4s')->where('id', $id)->delete();
        return redirect('/adminadmission');
    }

}
