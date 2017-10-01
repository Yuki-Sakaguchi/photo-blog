<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class HeloController extends Controller
{
    /**
     * get
     */
    public function index(Request $request)
    {
        $res = 'ID: ' . $request->id;
        return view('helo', [
            'message' => $res
        ]);
    }
    /**
     * post
     * postのためにはトークンを一緒に送る必要がある
     * https://readouble.com/laravel/5.1/ja/routing.html#csrf-protection
     */
    public function store(Request $request)
    {
        $res = "you typed: " . $request->input('str');
        return view('helo', [
            'message' => $res
        ]);
    }
}
