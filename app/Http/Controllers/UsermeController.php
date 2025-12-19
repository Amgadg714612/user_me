<?php

namespace App\Http\Controllers;

use App\Models\userme;
use Illuminate\Http\Request;

class UsermeController extends Controller
{
  public function index()
    {
        $users = userme::all();
        return view('userme.index', compact('users'));
    }

    public function create()
    {
        return view('userme.create');
    }

    public function store(Request $request)
    {
        userme::create($request->all());
        return redirect()->route('usermes.index');
    }

    public function show(userme $user)
    {
        return view('userme.show', compact('user'));
    }

    public function edit(userme $user)
    {
        return view('userme.edit', compact('user'));
    }

    public function update(Request $request, userme $user)
    {
        $user->update($request->all());
        return redirect()->route('userme.index');
    }

    public function destroy(userme $user)
    {
        $user->delete();
        return redirect()->route('userme.index');
    }    //
}

