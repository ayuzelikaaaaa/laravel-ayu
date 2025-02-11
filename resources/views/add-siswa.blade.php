@extends('partials.main')

@section('content')

<h1>Form Tambah Data</h1>

<form action="{{ Route('siswa.add.process') }}" method='post'>
@csrf


    <div class="row col-5">

        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama" name="nama">
          </div>
          <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <textarea class="form-control" id="alamat" rows="3" name="alamat" placeholder="Masukkan Alamat"></textarea>
          </div>

    <div class="form-check">
      <input class="form-check-input" type="radio" name="jenis_kelamin" value="Perempuan" id="flexRadioDefault1">
      <label class="form-check-label" for="flexRadioDefault1">
        Perempuan
      </label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="radio" name="jenis_kelamin" value="Laki_laki" id="flexRadioDefault2" checked>
      <label class="form-check-label" for="flexRadioDefault2">
        Laki-laki
      </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="jenis_kelamin" value="Boti" id="flexRadioDefault2" checked>
        <label class="form-check-label" for="flexRadioDefault2">
          Boti
        </label>
      </div>
      <div class="mb-3">
        <button class="btn btn-success" type="submit">Simpan</button>
      </div>

    </div>
</form>



@endsection
