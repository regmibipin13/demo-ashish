<?php

namespace App\Http\Controllers;

use App\Models\Ck;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CkController extends Controller
{
    public function index()
    {
        $cks = Ck::all();
        return view('ck.index', [
            'cks' => $cks
        ]);
    }

    public function create()
    {
        return view('ck.create');
    }

    public function store(Request $request)
    {
        $data = $request->all();

        $data['password'] = Hash::make($data['password']);

        Ck::create($data);

        return redirect()->route('ck.index');
    }

    public function edit($id)
    {
        $ck = Ck::find($id);
        return view('ck.edit', [
            'ck' => $ck
        ]);
    }

    public function update($id, Request $request)
    {
        // no password
        $data = $request->all();

        // password
        $ck = Ck::find($id);

        if (isset($data['password']) && $data['password'] !== null) {
            $data['password'] = Hash::make($data['password']);
            $ck->update($data);
        } else {
            $data['password'] = $ck->password;
            $ck->update($data);
        }

        return redirect()->route('ck.index');
    }

    public function destroy($id)
    {
        $ck = Ck::find($id);
        $ck->delete();
        return redirect()->back();
    }
}
