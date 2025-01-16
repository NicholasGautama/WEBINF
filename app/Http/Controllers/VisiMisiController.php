<?php

namespace App\Http\Controllers;

use View;
use App\Models\visimisi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VisiMisiController extends Controller
{
    public function show()
    {
        $visimisi = visimisi::all();
        return view('visimisi', ['visimisi'=>$visimisi]);
    }
    
    public function showadmin()
    {
        $visimisi = visimisi::all();
        return view('admin.adminvisimisi', ['visimisi'=>$visimisi]);
    }

    public function edit(Request $request, $id)
    {
        $visimisi = visimisi::findOrFail($id);
        return view('admin.adminedit-visimisi',['visimisi'=>$visimisi]);
    }

    public function update(Request $request, $id)
    {
        $visimisi = visimisi::findOrFail($id);

        $visimisi->update($request->all());
        return redirect('/adminvisimisi');
    }
}
