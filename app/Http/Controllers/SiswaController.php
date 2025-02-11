<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Student;


class siswacontroller extends Controller
{
    public function index()
    {

        $siswa = Student::all();
        return view('siswa', compact('siswa'));
    }

    public function add()
    {
        return view('add-siswa');
    }

    public function store(Request $request)
    {
        // untuk menyimpan data siswa
        // data yang di simpan adalah nama, alamat, dan jenis kelamin

        $data = Student::create([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'jenis_kelamin' =>$request->jenis_kelamin
        ]);

        // mengarahkan kembali ke halaman siswa setelah berhasil simpan data
        return redirect()->route('siswa');
    }

    public function destroy($id)
    {
        // menemukan siswa berdasarkan id
        $data = Student::find($id);

        // menghapus siswa berdasarkan id yang ditemukan
        $data->delete();
        return redirect()->route('siswa');
    }

    public function edit($id) {
        // menemukan siswa berdasarkan ig
        $data = Student::findDrFail($id);

        // mengirimkan data sesuai id ke view
        return view('edit-siswa', compact('data'));
    }

}


        //     'nama' => 'ayu',
        //     'alamat' => 'tlogosari',
        //     'jenis_kelamin' => 'perempuan',
        //     ],
        //     [
        //     'nama' => 'zelika',
        //     'alamat' => 'sempu',
        //     'jenis_kelamin' => 'wanita'
        //     ],
        //     [
        //     'nama' => 'putri',
        //     'alamat' => 'genteng',
        //     'jenis_kelamin' => 'cewek'
        //     ]
        // ];
        //dd($siswa);
