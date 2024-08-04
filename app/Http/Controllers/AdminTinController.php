<?php

namespace App\Http\Controllers;

use App\Models\LoaiTin;
use App\Models\Tin;
use Illuminate\Http\Request;

class AdminTinController extends Controller
{
    public function adminTin()
    {
        return view('admin.index');
    }
    public function table()
    {
        return view('admin.indexTable');
    }


    public function create()
    {
        $loaitin = LoaiTin::all();
        return view('admin.create', compact('loaitin'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'TieuDe' => 'required',
            'TomTat' => 'required',
            'NoiDung' => 'required',
            'idLT' => 'required|exists:loaitin,id',
            'img' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $tin = new Tin();
        $tin->TieuDe = $request->TieuDe;
        $tin->TomTat = $request->TomTat;
        $tin->NoiDung = $request->NoiDung;
        $tin->idLT = $request->idLT;
        $tin->TenLT = LoaiTin::find($request->idLT)->TenLT;
        $tin->luotxem = $request->luotxem;

        if ($request->hasFile('img')) {
            $imagePath = $request->file('img')->store('images', 'public');
            $tin->img = $imagePath;
        }

        $tin->save();

        return redirect()->route('admin.index')->with('success', 'Tin created successfully.');
    }
}
