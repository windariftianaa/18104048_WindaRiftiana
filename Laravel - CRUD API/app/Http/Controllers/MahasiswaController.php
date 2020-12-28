<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Mahasiswa;
class MahasiswaController extends Controller
{
    //

    public function index(){
        return Mahasiswa::all();
    }

    public function create(request $request){
        $mhs = new Mahasiswa;
        $mhs->nama = $request->nama;
        $mhs->kelas = $request->kelas;
        $mhs->alamat = $request->alamat;
        $mhs->photo = $request->photo;
        $mhs->save();

        return "Data berhasil ditambah";
        
    }

    public function update(request $request,$id){
        $nama = $request->nama;
        $kelas = $request->kelas;
        $alamat = $request->alamat;
        $photo = $request->photo;

        $mhs = Mahasiswa::find($id);
        $mhs->nama = $request->nama;
        $mhs->kelas = $request->kelas;
        $mhs->alamat = $request->alamat;
        $mhs->photo = $request->photo;
        $mhs->save();

        return "Data berhasil di Update";

    }
    public function delete($id){
        $mhs = Mahasiswa::find($id);
        $mhs->delete();

        return "Data berhasil dihapus";
    }
}
