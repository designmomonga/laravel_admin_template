<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;// Authファサードを読み込む

class IndexController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        //dd($user);
        return view('admin.index', ['user' => $user]);
    }
}
