<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TinController extends Controller
{
    public function index()
    {

        return view('home');
    }

    public function chitiet($id)
    {
        $tin = DB::table('tin')->where('id', $id)->first();
        $data = ['id' => $id, 'tin' => $tin];
        return view('client.chitiet', $data);
    }

    public function tin()
    {
        $tinNew  = DB::table('tin')->take(4)->get();
        $tinLuotxem = DB::table('tin')
            ->orderByDesc('luotxem')
            ->take(5)
            ->get();
        return view('client.index', compact('tinNew', 'tinLuotxem'));
    }
    public function tintrongloai($idLT)
    {
        $listtin = DB::table('tin')->where('idLT', $idLT)->get();
        $tinLuotxem = DB::table('tin')
            ->orderByDesc('luotxem')
            ->take(5)
            ->get();
        $data = ['idLT' => $idLT, 'listtin' => $listtin, 'tinLuotxem' => $tinLuotxem];
        return view('client.tintrongloai', $data);
    }



    public function search(Request $request)
    {
        $query = $request->input('query');
        // dd($query);
        // Đảm bảo rằng cột 'title' khớp với cấu trúc cơ sở dữ liệu của bạn
        $results = DB::table('tin')
            ->where('TieuDe', 'like', '%' . $query . '%')
            ->get();
        return view('client.timkiem', [
            'results' => $results,
            'query' => $query
        ]);
    }
}
