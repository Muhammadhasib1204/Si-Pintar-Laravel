<?php

namespace App\Http\Controllers;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;


class MahasiswaController extends Controller
{
    public function index(){
        $data = Mahasiswa::get(); 
        return view('Mahasiswas/Mahasiswa', compact('data'));
    }

    public function add(){
        return view('Mahasiswas/addMahasiswa');
    }

    public function insertdata(Request $request){
        Mahasiswa::create($request->all());
        return redirect()->route('Mahasiswa');
    }

    public function readdata($id){
        $data = Mahasiswa::find($id);
        return view('Mahasiswas/updateMahasiswa' , compact('data'));
    }

    public function updatedata(Request $request, $id){
        $data = Mahasiswa::find($id);
        $data->update($request->all());
        return redirect()->route('Mahasiswa');
    }

    public function deletedata($id){
        $data = Mahasiswa::find($id);
        $data->delete();
        return redirect()->route('Mahasiswa');
    }

}
