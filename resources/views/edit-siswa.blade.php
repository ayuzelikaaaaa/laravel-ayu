@extends('partials.main')

@section('content')
    <h1>Form Edit Siswa</h1>

    <form action="{{ Route('siswa.update', $data['id']) }}" method='post'>
        @csrf
        @method('PUT')
        {{-- metode pengiriman data (edit) --}}


        <div class="row col-5">

            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" placeholder="Masukkan aNama" name="nama"
                    value="{{ $data['nama'] }}">
                    @error('nama')
                    <small class ="text-danger">
                        {{ $message }}
                    </small>
                @enderror
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <textarea class="form-control" id="alamat" rows="3" name="alamat" placeholder="Masukkan Alamat">{{ $data['alamat'] }}</textarea>
                @error('alamat')
                <small class ="text-danger">
                    {{ $message }}
                </small>
            @enderror
            </div>

            <div class="form-check">
                <input class="form-check-input" type="radio" name="jenis_kelamin" value="Perempuan" id="flexRadioDefault1"
                    {{ $data['jenis_kelamin'] == 'Perempuan' ? 'selected' : '' }}>
                @error('nama')
                    <small class ="text-danger">
                        {{ $message }}
                    </small>
                @enderror
                <label class="form-check-label" for="flexRadioDefault1">
                    Perempuan
                </label>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="radio" name="jenis_kelamin" value="Laki_laki" id="flexRadioDefault2"
                    {{ $data['jenis_kelamin'] == 'Laki-laki' ? ' selected' : '' }} checked>
                @error('alamat')
                    <small class ="text-danger">
                        {{ $message }}
                    </small>
                @enderror
                <label class="form-check-label" for="flexRadioDefault2">
                    Laki-laki
                </label>
            </div>


            <div class="mb-3">
                <button class="btn btn-success" type="submit">Edit</button>
            </div>

        </div>
    </form>
@endsection
