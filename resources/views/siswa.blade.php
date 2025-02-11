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

        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$sw->nama}}</td>
            <td>{{$sw->alamat}}</td>
            <td>{{$sw->jenis_kelamin}}</td>
            <td>
                <form action="{{ Route('siswa.delete', $sw['id']) }}" method="post">
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-danger" type="submit">Hapus</button>
                </form>
                <a clasas="btn btn-warning" href="{{ Route('siswa.edit', $sw->id)}}">Edit</a>
            </td>
        </tr>
        @endforeach

    </table>
@endsection
