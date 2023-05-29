<?php

namespace App\Http\Controllers;

use App\Models\employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index(){
        $data= employee::all();
        return view ('properti',compact('data'));
    }

public function transaksi(){
    return view('transaksi');
}

public function viewtransaksi(Request $request){
    //dd($request->all());
    employee::create($request->all());
    return redirect()->route('employee')->with('success','Data Berhasil Ditambahkan');
}

public function tampilkantransaksi($id){

    $data = employee::find($id);
    //dd($data);

    return view('tampiltransaksi', compact('data'));
}

public function updatetransaksi(Request $request, $id){
    $data = employee::find($id);
    $data->update($request->all());
    return redirect()->route('employee')->with('success','Data Berhasil Di Update');
}

public function delete($id){
    $data = employee::find($id);
    $data->delete();
    return redirect()->route('employee')->with('success','DATA BERHASIL DI HAPUS');
}

}
