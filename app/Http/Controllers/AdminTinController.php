<?php

namespace App\Http\Controllers;

use App\Models\LoaiTin;
use App\Models\Tin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminTinController extends Controller
{
    public function adminTin()
    {
        return view('admin.index');
    }
    public function table()
    {
        $loaitin = LoaiTin::all();
        $tin = Tin::all();
        return view('admin.indexTable', compact('loaitin', 'tin'));
    }


    public function create()
    {
        $loaitin = LoaiTin::all();
        return view('admin.tin.create', compact('loaitin'));
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
        $tin->luotxem = $request->luotxem ?? 0;

        if ($request->hasFile('img')) {
            $imagePath = $request->file('img')->store('images', 'public');
            $tin->img = $imagePath;
        }

        $tin->save();

        return redirect()->route('table')->with('success', 'Tin created successfully.');
    }

    public function edit($id)
    {
        $tin = Tin::findOrFail($id);
        $loaitin = LoaiTin::all();
        return view('admin.tin.edit', compact('tin', 'loaitin'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'TieuDe' => 'required',
            'TomTat' => 'required',
            'NoiDung' => 'required',
            'idLT' => 'required|exists:loaitin,id',
            'img' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $tin = Tin::findOrFail($id);
        $tin->TieuDe = $request->TieuDe;
        $tin->TomTat = $request->TomTat;
        $tin->NoiDung = $request->NoiDung;
        $tin->idLT = $request->idLT;
        $tin->TenLT = LoaiTin::find($request->idLT)->TenLT;
        $tin->luotxem = $request->luotxem ?? 0;

        if ($request->hasFile('img')) {
            // Xóa ảnh cũ nếu có
            if ($tin->img) {
                Storage::disk('public')->delete($tin->img);
            }
            $imagePath = $request->file('img')->store('images', 'public');
            $tin->img = $imagePath;
        }

        $tin->save();

        return redirect()->route('table')->with('success', 'Tin updated successfully.');
    }
    public function destroy($id)
    {
        $tin = Tin::findOrFail($id);
        $tin->delete();

        return redirect()->route('table')->with('success', 'Loại tin deleted successfully.');
    }
}
