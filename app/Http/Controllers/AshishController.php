<?php

namespace App\Http\Controllers;

use App\Models\Ck;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AshishController extends Controller
{
    public function index()
    {
        $data = Ck::all();
        return view('pages.home', [
            'data' => $data,
        ]);
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
        $data = $request->all();

        $data['password'] = Hash::make($data['password']);

        Ck::create($data);

        return redirect()->route('home');
    }


    public function product($id, Request $request)
    {
    }
}
