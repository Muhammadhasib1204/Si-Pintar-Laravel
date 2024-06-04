@extends('layout.app') @section('content')

<div class="pagetitle">
    <h1>Tambah Data Mahasiswa</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item">Mahasiswa</li>
        <li class="breadcrumb-item"><a href="{{ route('Mahasiswa') }}"></a>Data Mahasiswa</li>
        <li class="breadcrumb-item active">Tambah Data Mahasiswa</li>
      </ol>
    </nav>
</div><!-- End Page Title -->
<div class="col-lg-12">

    <div class="card">
      <div class="card-body"><br>
        <form class="row g-3" action="{{ route('insertMahasiswa') }}" method="POST">
        @csrf
        <div class="col-12">
            <label for="nama" class="form-label">Nama Mahasiswa</label>
            <input type="text" class="form-control" id="nama" name="nama" required>
          </div>
          <div class="col-12">
            <label for="nim" class="form-label">NIM</label>
            <input type="text" class="form-control" id="nim" name="nim" required>
          </div>
          <div class="col-12">
            <label for="kelas" class="form-label">Kelas</label>
            <input type="text" class="form-control" id="kelas" name="kelas" required>
          </div>
          <div class="col-12">
            <label for="jurusan" class="form-label">Jurusan</label>
            <input type="text" class="form-control" id="jurusan" name="jurusan" required>
          </div>
          <div class="col-12">
            <label for="prodi" class="form-label">Prodi</label>
            <input type="text" class="form-control" id="prodi" name="prodi" required>
          </div>
          <div class="text-center">
            <button type="submit" class="btn btn-primary float-left"style="margin-top: 20px;" >Simpan</button>
            <button type="reset" class="btn btn-secondary float-right" style="margin-top: 20px;">Reset</button>
          </div>
        </form>
      </div>
    </div>
@endsection