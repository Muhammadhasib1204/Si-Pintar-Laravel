<?php

namespace App\Http\Controllers;
use App\Models\Matkul;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class MatkulController extends Controller
{
    public function index(){
        $data = Matkul::get(); 
        return view('Matkuls/Matkul', compact('data'));
    }

    public function add(){
        return view('Matkuls/addMatkul');
    }

    public function insertdata(Request $request){
        Matkul::create($request->all());
        return redirect()->route('Matkul');
    }

    public function readdata($id){
        $data = Matkul::find($id);
        return view('Matkuls/updateMatkul' , compact('data'));
    }

    public function updatedata(Request $request, $id){
        $data = Matkul::find($id);
        $data->update($request->all());
        return redirect()->route('Matkul');
    }

    public function deletedata($id){
        $data = Matkul::find($id);
        $data->delete();
        return redirect()->route('Matkul');
    }
    public function exportpdf(){
        $data = Matkul::all();
        $PDF = PDF::loadView('Matkuls/reportMatkul', array('data' => $data));
        return $PDF->stream('data-Matkul.pdf');
    }
}
