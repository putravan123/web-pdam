<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KapasitasProduk;
use Illuminate\Support\Facades\Storage;

class KapasitasProdukController extends Controller
{
    // Menampilkan daftar mata air
    public function index()
    {
        $kapasitasProduk = KapasitasProduk::all(); 
        return view('dashboard.Kapasitas_produk.index', compact('kapasitasProduk'));
    }

    // Menampilkan form untuk membuat mata air baru
    public function create()
    {
        return view('dashboard.Kapasitas_produk.create');
    }

    // Menyimpan data mata air baru
    public function store(Request $request)
    {
        // Validasi data input
        $request->validate([
            'title' => 'required|string',
            'subtitle' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'imageTable' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'nama_mata_air' => 'nullable|string',
            'air_baku' => 'nullable|integer',
            'kapasitas_sistem' => 'nullable|integer',
            'produksi' => 'nullable|integer',
            'sisa_kapasitas' => 'nullable|integer',
            'cabang_unit' => 'nullable|string',
            'keterangan' => 'nullable|string',
        ]);
    
        // Cek apakah imageTable atau nama_mata_air ada nilainya
        if (empty($request->imageTable) && empty($request->nama_mata_air)) {
            return redirect()->back()->withErrors(['error' => 'Salah satu dari "imageTable" atau "nama_mata_air" harus diisi.']);
        }
    
        // Upload gambar "image" jika ada
        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
        }
    
        // Upload gambar "imageTable" jika ada
        $imageTablePath = null;
        if ($request->hasFile('imageTable')) {
            $imageTablePath = $request->file('imageTable')->store('images', 'public');
        }
    
        // Simpan data mata air
        KapasitasProduk::create([
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'image' => $imagePath,
            'imageTable' => $imageTablePath,
            'nama_mata_air' => $request->nama_mata_air,
            'air_baku' => $request->air_baku,
            'kapasitas_sistem' => $request->kapasitas_sistem,
            'produksi' => $request->produksi,
            'sisa_kapasitas' => $request->sisa_kapasitas,
            'cabang_unit' => $request->cabang_unit,
            'keterangan' => $request->keterangan,
        ]);
    
        return redirect()->route('kapasitas-produk.index')
                         ->with('success', 'Mata Air created successfully.');
    }
    

    // Menampilkan detail mata air
    public function show($id)
    {
        $kapasitasProduk = KapasitasProduk::findOrFail($id);
        return view('kapasitas-produk.show', compact('kapasitasProduk'));
    }

    // Menampilkan form untuk mengedit mata air
    public function edit($id)
    {
        $kapasitasProduk = KapasitasProduk::findOrFail($id);
        return view('dashboard.Kapasitas_produk.edit', compact('kapasitasProduk'));
    }

    // Memperbarui data mata air
// Memperbarui data mata air
public function update(Request $request, $id)
{
    // Validasi data input
    $request->validate([
        'title' => 'required|string',
        'subtitle' => 'required|string',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'imageTable' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validate imageTable properly
        'nama_mata_air' => 'nullable|string',
        'air_baku' => 'nullable|integer',
        'kapasitas_sistem' => 'nullable|integer',
        'produksi' => 'nullable|integer',
        'sisa_kapasitas' => 'nullable|integer',
        'cabang_unit' => 'nullable|string',
        'keterangan' => 'nullable|string',
    ]);

    $kapasitasProduk = KapasitasProduk::findOrFail($id);

    // Cek apakah imageTable atau nama_mata_air ada nilainya
    if (empty($request->imageTable) && empty($request->nama_mata_air)) {
        return redirect()->back()->withErrors(['error' => 'Salah satu dari "imageTable" atau "nama_mata_air" harus diisi.']);
    }

    // Cek jika ada gambar baru
    if ($request->hasFile('image')) {
        // Hapus gambar lama jika ada
        if ($kapasitasProduk->image) {
            Storage::delete('public/' . $kapasitasProduk->image);
        }
        // Upload gambar baru
        $imagePath = $request->file('image')->store('images', 'public');
        $kapasitasProduk->image = $imagePath;
    }

    // Cek jika ada gambar table baru
    if ($request->hasFile('imageTable')) {
        // Hapus gambar table lama jika ada
        if ($kapasitasProduk->imageTable) {
            Storage::delete('public/' . $kapasitasProduk->imageTable);
        }
        // Upload gambar table baru
        $imageTablePath = $request->file('imageTable')->store('images', 'public');
        $kapasitasProduk->imageTable = $imageTablePath;
    }

    // Perbarui data mata air
    $kapasitasProduk->update([
        'title' => $request->title,
        'subtitle' => $request->subtitle,
        'nama_mata_air' => $request->nama_mata_air,
        'air_baku' => $request->air_baku,
        'kapasitas_sistem' => $request->kapasitas_sistem,
        'produksi' => $request->produksi,
        'sisa_kapasitas' => $request->sisa_kapasitas,
        'cabang_unit' => $request->cabang_unit,
        'keterangan' => $request->keterangan,
    ]);

    return redirect()->route('kapasitas-produk.index')
                     ->with('success', 'Mata Air updated successfully.');
}


    // Menghapus data mata air
    public function destroy($id)
    {
        $kapasitasProduk = KapasitasProduk::findOrFail($id);

        // Hapus gambar jika ada
        if ($kapasitasProduk->image) {
            Storage::delete('public/' . $kapasitasProduk->image);
        }

        // Hapus data mata air
        $kapasitasProduk->delete();

        return redirect()->route('kapasitas-produk.index')
                         ->with('success', 'Mata Air deleted successfully.');
    }
}
