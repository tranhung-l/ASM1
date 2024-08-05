<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MemberController extends Controller
{
    public function dashboard()
    {
        $tinNew  = DB::table('tin')->take(4)->get();
        $tinLuotxem = DB::table('tin')
            ->orderByDesc('luotxem')
            ->take(5)
            ->get();
        return view('client.index', compact('tinNew', 'tinLuotxem'));
    }
}
