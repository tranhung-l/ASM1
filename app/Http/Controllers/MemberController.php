<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function dashboard()
    {
        return view('client.index');
    }
}
