<?php

namespace App\Http\Controllers;
use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index()
    {
        $barangList = Barang::all();
        return view('index', compact('barangList'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        Barang::create($request->all());
        return redirect()->route('index');
    }

    public function edit(Barang $barang)
    {
        return view('edit', compact('barang'));
    }

    public function update(Request $request, Barang $barang)
    {
        $barang->update($request->all());
        return redirect()->route('index');
    }

    public function destroy(Barang $barang)
    {
        $barang->delete();
        return redirect()->route('barang.index');
    }
}
