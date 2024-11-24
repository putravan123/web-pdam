<?php

namespace App\Http\Controllers;

use App\Models\VisiMisi;
use Illuminate\Http\Request;

class VisiMisiController extends Controller
{
    public function index()
    {
        $visiMisis = VisiMisi::all();
        return view('dashboard.visi_misi.index', compact('visiMisis'));
    }

    public function create()
    {
        return view('dashboard.visi_misi.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'titel' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        VisiMisi::create([
            'titel' => $request->titel,
            'content' => $request->content,
        ]);

        return redirect()->route('visi_misis.index')->with('success', 'Data added successfully.');
    }

    public function edit(VisiMisi $visiMisi)
    {
        return view('dashboard.visi_misi.edit', compact('visiMisi'));
    }

    public function update(Request $request, VisiMisi $visiMisi)
    {
        $request->validate([
            'titel' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        $visiMisi->update($request->only('titel', 'content'));

        return redirect()->route('visi_misis.index')->with('success', 'Data updated successfully.');
    }

    public function destroy(VisiMisi $visiMisi)
    {
        $visiMisi->delete();
        return redirect()->route('visi_misis.index')->with('success', 'Data deleted successfully.');
    }
}
