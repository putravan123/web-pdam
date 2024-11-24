<?php

namespace App\Http\Controllers;

use App\Models\TentangPdam;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TentangPdamController extends Controller
{
    public function index()
    {
        $tentangPdam = TentangPdam::all();
        return view('dashboard.tentang_pdams.index', compact('tentangPdam'));
    }

    public function create()
    {
        return view('dashboard.tentang_pdams.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'title' => 'nullable|string|max:255',
            'created_at' => 'nullable|date',
            'content' => 'nullable|string',
        ]);

        $image = null;
        if ($request->hasFile('image')) {
            $image = $request->file('image')->store('tentangPdam', 'public');
        }

        TentangPdam::create([
            'title' => $request->title,
            'image' => $image,
            'content' => $request->content,
        ]);

        return redirect()->route('tentang-pdams.index')
                         ->with('success', 'Tentang PDAM created successfully.');
    }

    public function show($id)
    {
        $tentangPdam = TentangPdam::findOrFail($id);
        return view('dashboard.tentang_pdams.show', compact('tentangPdam'));
    }

    public function edit($id)
    {
        $tentangPdam = TentangPdam::findOrFail($id);
        return view('dashboard.tentang_pdams.edit', compact('tentangPdam'));
    }

    public function update(Request $request, $id)
    {
        $tentangPdam = TentangPdam::findOrFail($id);

        $request->validate([
            'image' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'title' => 'nullable|string|max:255',
            'created_at' => 'nullable|date',
            'content' => 'nullable|string',
        ]);

        $image = $tentangPdam->image;
        if ($request->hasFile('image')) {
            if ($image) {
                Storage::delete('public/' . $image);
            }
            $image = $request->file('image')->store('tentangPdam', 'public');
        }

        $tentangPdam->update([
            'title' => $request->title,
            'image' => $image,
            'content' => $request->content,
        ]);

        return redirect()->route('tentang-pdams.index')
                         ->with('success', 'Tentang PDAM updated successfully.');
    }

    public function destroy($id)
    {
        $tentangPdam = TentangPdam::findOrFail($id);

        if ($tentangPdam->image) {
            Storage::delete('public/' . $tentangPdam->image);
        }

        $tentangPdam->delete();

        return redirect()->route('tentang-pdams.index')
                         ->with('success', 'Tentang PDAM deleted successfully.');
    }
}
