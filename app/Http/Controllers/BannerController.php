<?php

namespace App\Http\Controllers;

use App\Models\banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
        $data=banner::all();
    return view ('admin.banner',compact('data'));
}
    



    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $data = Banner::create($request->all());

       if ($request->hasFile('gambar')) {
        $image = $request->file('gambar')->move('gambarproduk/',$request->file('gambar')->getClientOriginalName());
        $data->gambar = $request->file('gambar')->getClientOriginalName();
        $data->save();
       }


return redirect()->route('banner')->with('success','Data Berhasil Ditambahkan');
    }

   

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
