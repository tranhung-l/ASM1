<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LoaiTin;

class LoaiTinController extends Controller
{
    public function create()
    {
        return view('admin.LoaiTin.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'TenLT' => 'required|string|max:255',
            'ThuTu' => 'required|integer',
            'AnHien' => 'required|boolean',
        ]);

        LoaiTin::create($request->all());

        return redirect()->route('table')->with('success', 'Loại tin created successfully.');
    }
    public function edit($id)
    {
        $loaitin = LoaiTin::findOrFail($id);
        return view('admin.LoaiTin.edit', compact('loaitin'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'TenLT' => 'required|string|max:255',
            'ThuTu' => 'required|integer',
            'AnHien' => 'required|boolean',
        ]);

        $loaitin = LoaiTin::findOrFail($id);
        $loaitin->update($request->all());

        return redirect()->route('table')->with('success', 'Loại tin updated successfully.');
    }
    public function destroy($id)
    {
        $loaitin = LoaiTin::findOrFail($id);
        $loaitin->delete();

        return redirect()->route('table')->with('success', 'Loại tin deleted successfully.');
    }
        
}
