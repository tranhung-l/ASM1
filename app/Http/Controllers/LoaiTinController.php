<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LoaiTin;

class LoaiTinController extends Controller
{
    public function create()
    {
        return view('loaitin.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'TenLT' => 'required|string|max:255',
            'ThuTu' => 'required|integer',
            'AnHien' => 'required|boolean',
        ]);

        LoaiTin::create($request->all());

        return redirect()->route('loaitin.index')->with('success', 'Loại tin created successfully.');
    }
}
