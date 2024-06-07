@extends('layout.app') @section('content')

<div class="pagetitle">
    <h1>Ubah Data Matkul</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item">Matkul</li>
        <li class="breadcrumb-item"><a href="{{ route('Matkul') }}"></a>Matkul</li>
        <li class="breadcrumb-item active">Ubah Data Matkul</li>
      </ol>
    </nav>
</div><!-- End Page Title -->

<div class="col-lg-12">

    <div class="card">
      <div class="card-body"><br>
        <form class="row g-3" action="{{ route('updateMatkul', $data->id) }}" method="POST">
        @csrf
          <div class="col-12">
            <label for="nama_matkul" class="form-label">Nama Matkul</label>
            <input type="text" class="form-control" id="nama_matkul" name="nama_matkul" value="{{ $data->nama_matkul }}" required>
          </div>
          <div class="col-12">
            <label for="jumlah_sks" class="form-label">Jumlah SKS</label>
            <input type="text" class="form-control" id="jumlah_sks" name="jumlah_sks" value="{{ $data->jumlah_sks }}" required>
          </div>
          <div class="col-12">
            <label for="jam_matkul" class="form-label">Jam Matkul</label>
            <input type="text" class="form-control" id="jam_matkul" name="jam_matkul" value="{{ $data->jam_matkul }}" required>
          </div>
           <div class="col-12">
            <label for="ruangan_matkul" class="form-label">Ruangan Matkul</label>
            <input type="text" class="form-control" id="ruangan_matkul" name="ruangan_matkul" value="{{ $data->ruangan_matkul }}" required>
          </div>
          <div class="text-center" style="margin-top: 20px;">
            <button type="submit" class="btn btn-success float-left">Update</button>
          </div>
        </form>
      </div>
    </div>
@endsection