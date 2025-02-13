@extends('partials.main')



@section('content')

        <h1>Data Siswa</h1>
        <a href="/add-siswa"class="btn btn-secondary">Tambah Data</a>
        <table class="table table-bordered mt-3">

            <tr class="table-dark">
                <th>No</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Jenis Kelamin</th>
                <th>Menu</th>
            </tr>
    </div>


        @foreach ($siswa as $sw)

        {{-- foreach = pengulangan --}}

        {{-- kalau array berbentuk kotak --}}

        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$sw->nama}}</td>
            <td>{{$sw->alamat}}</td>
            <td>{{$sw->jenis_kelamin}}</td>
            <td>
                <form action="{{ Route('siswa.delete', $sw['id']) }}" method="post">
                    @method('DELETE')
                    @csrf

                    {{-- csrf = mengamankan yang direquest user --}}

                    <button class="btn btn-danger" type="submit" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</button>
                    <a class="btn btn-warning" href="{{ Route('siswa.edit', $sw->id)}}">Edit</a>
                </form>

            </td>
        </tr>
        @endforeach

    </table>
@endsection
