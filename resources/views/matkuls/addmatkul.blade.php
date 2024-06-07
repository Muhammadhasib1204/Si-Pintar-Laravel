@extends('layout.app') @section('content')

<div class="pagetitle">
    <h1>Tambah Data Matakuliah</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item">Matakuliah</li>
        <li class="breadcrumb-item"><a href="{{ route('Matkul') }}"></a>Data Matakuliah</li>
        <li class="breadcrumb-item active">Tambah Data Matakuliah</li>
      </ol>
    </nav>
</div><!-- End Page Title -->
<div class="col-lg-12">

    <div class="card">
      <div class="card-body"><br>
        <form class="row g-3" action="{{ route('insertMatkul') }}" method="POST">
        @csrf
        <div class="col-12">
            <label for="nama_matkul" class="form-label">Nama Matkul</label>
            <input type="text" class="form-control" id="nama_matkul" name="nama_matkul" required>
          </div>
          <div class="col-12">
            <label for="jumlah_sks" class="form-label">Jumlah SKS</label>
            <input type="text" class="form-control" id="jumlah_sks" name="jumlah_sks" required>
          </div>
          <div class="col-12">
            <label for="jam_matkul" class="form-label">Jam Matkul</label>
            <input type="text" class="form-control" id="jam_matkul" name="jam_matkul" required>
          </div>
          <div class="col-12">
            <label for="ruangan_matkul" class="form-label">Ruangan Matkul</label>
            <input type="text" class="form-control" id="ruangan_matkul" name="ruangan_matkul" required>
          </div>
          <div class="text-center">
            <button type="submit" class="btn btn-primary float-left"style="margin-top: 20px;" >Simpan</button>
            <button type="reset" class="btn btn-secondary float-right" style="margin-top: 20px;">Reset</button>
          </div>
        </form>
      </div>
    </div>
@endsection