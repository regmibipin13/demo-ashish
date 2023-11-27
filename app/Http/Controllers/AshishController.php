<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AshishController extends Controller
{
    public function index()
    {
        return view('pages.home');
    }

    public function about()
    {
        return view('pages.about');
    }
    public function contact()
    {
        return view('pages.contact');
    }

    public function formSubmit(Request $request)
    {
        $data = [];
        $data[] = $request->all(); // 3

        return view('pages.table', [
            'data' => $data,
        ]);
    }


    public function product($id, Request $request)
    {
    }
}
