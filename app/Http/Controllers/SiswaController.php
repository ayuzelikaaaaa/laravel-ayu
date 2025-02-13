<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Student;


class siswacontroller extends Controller
{
    public function index()
    {
        //
        $siswa = Student::all();
        return view('siswa', compact('siswa'));
        //menerima satu atau lebih nama variabel dalam bentuk string, dan kemudian mengubahnya menjadi array
    }

    public function add()
    {
        return view('add-siswa');
    }

    public function store(Request $request)
    {
        $validated = $request ->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'jenis_kelamin' => 'required'
        ]);

        //untuk custom pesan required
        //],[ 'nama.required' => "Kolom nama harus di isi",
        // 'alamat.required' => "Kolom alamat harus di isi",
        // 'jenis_kelamin.required' => "Kolom jenis_kelamin harus di isi"]);


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

    public function edit($id)
    {
        // menemukan siswa berdasarkan ig
        $data = Student::findOrFail($id);

        // mengirimkan data sesuai id ke view
        return view('edit-siswa', compact('data'));
    }

    public function update(Request $request, $id)
    {
        // menemukan data siswa berdasarkan id
        $data = Student::findOrFail($id);
        $validated = $request ->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'jenis_kelamin' => 'required'
        ]);

        // untuk mengupdate (mengedit) data siswa kalau ada yang salah
        $data->update($validated);

        // mengarahkan kembali ke halaman siswa setelah berhasil mengedit data
        return redirect()->route('siswa');
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
