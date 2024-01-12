<?php

namespace App\Http\Controllers;

use App\Models\dvd;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DvdController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $dvd = dvd::all();
        // return view('Dashbord.index', compact('dvd'));
        $dvd = dvd::orderBy('created_at', 'DESC')->get();

        return view('dvd.index', compact('dvd'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dvd.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if ($request->file('img_url')) {
            $file = $request->file('img_url');
            $filename = $file->store('public/path');
            dvd::create(['title' => $request->title, 'harga' => $request->harga, 'deskripsi' => $request->deskripsi, 'dvd_code' => $request->dvd_code, 'img_url' => $filename, 'rilis' => $request->rilis, 'durasi' => $request->durasi, 'produser' => $request->produser]);
        }
        return redirect('dvd')->with('success', 'DVD added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $dvd = dvd::findOrFail($id);

        return view('dvd.show', compact('dvd'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $dvd = dvd::findOrFail($id);

        return view('dvd.edit', compact('dvd'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $dvd = dvd::findOrFail($id);
        if ($request->file('img_url')) {
            Storage::disk('public')->delete('{{ $dvd->img_url }}');
            $file = $request->file('img_url');
            $filename = $file->store('public/path');
            $dvd->update(['title' => $request->title, 'harga' => $request->harga, 'deskripsi' => $request->deskripsi, 'dvd_code' => $request->dvd_code, 'img_url' => $filename, 'rilis' => $request->rilis, 'durasi' => $request->durasi, 'produser' => $request->produser]);
        }
        return redirect('dvd')->with('success', 'DVD updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = dvd::findOrFail($id);

        $product->delete();

        return redirect('dvd')->with('success', 'DVD deleted successfully');
    }
}
