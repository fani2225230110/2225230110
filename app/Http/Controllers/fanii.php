<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\fani;

class fanii extends Controller
{
    public function index()
    {
        $data = fani::all();
        return view('isian.tampildata')->with('data', $data);
    }

    public function create()
    {
        return view('isian.uas');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'nomortelepon' => 'required|numeric'
        ]);
        
        $data = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => $request->input('password'),
            'nomortelepon' => $request->input('nomortelepon')
        ];
       
        fani::create($data);
        return redirect('isian');
    }
    public function edit(string $id)
    {
        $data = fani::where('name',$id)->first();
        return view('isian.edit')->with('data',$data);
    }
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'nomortelepon' => 'required|numeric'
        ]);
        
        $data = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => $request->input('password'),
            'nomortelepon' => $request->input('nomortelepon')
        ];
        
        fani::where('name',$id)->update($data);
        return redirect('isian')->with('success','data berhasil diupdate!');
    
    }
    public function destroy(string $id)
    {
        fani::where('name',$id)->delete();
        return redirect('isian')->with('success','data berhasil dihapus!');
    }
}