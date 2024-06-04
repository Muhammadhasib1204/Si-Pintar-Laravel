@extends('layout.app') @section('content')

<div class="pagetitle">
    <h1>Ubah Data Mahasiswa</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item">Mahasiswa</li>
        <li class="breadcrumb-item"><a href="{{ route('Mahasiswa') }}"></a>Mahasiswa</li>
        <li class="breadcrumb-item active">Ubah Data Mahasiswa</li>
      </ol>
    </nav>
</div><!-- End Page Title -->

<div class="col-lg-12">

    <div class="card">
      <div class="card-body"><br>
        <form class="row g-3" action="{{ route('updateMahasiswa', $data->id) }}" method="POST">
        @csrf
          <div class="col-12">
            <label for="nama" class="form-label">Nama Mahasiswa</label>
            <input type="text" class="form-control" id="nama" name="nama" value="{{ $data->nama }}" required>
          </div>
          <div class="col-12">
            <label for="nim" class="form-label">NIM</label>
            <input type="text" class="form-control" id="nim" name="nim" value="{{ $data->nim }}" required>
          </div>
          <div class="col-12">
            <label for="kelas" class="form-label">Kelas</label>
            <input type="text" class="form-control" id="kelas" name="kelas" value="{{ $data->kelas }}" required>
          </div>
           <div class="col-12">
            <label for="jurusan" class="form-label">Jurusan</label>
            <input type="text" class="form-control" id="jurusan" name="jurusan" value="{{ $data->jurusan }}" required>
          </div>
          <div class="col-12">
            <label for="prodi" class="form-label">Prodi</label>
            <input type="text" class="form-control" id="prodi" name="prodi" value="{{ $data->prodi }}" required>
          </div>
          <div class="text-center" style="margin-top: 20px;">
            <button type="submit" class="btn btn-success float-left">Update</button>
          </div>
        </form>
      </div>
    </div>
@endsection