@extends('layout.app') @section('content')

<div class="pagetitle">
    <h1>Data Mahasiswa</h1>
</div><!-- End Page Title -->
<div class="container-fluid">
    <div class="card">
      <div class="card-header">
        <div class="buttons">
        <a href="{{ route('addMahasiswa') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah Data</a>
      </div>
    </div>
    <div class="row">
        <div class="col-12">
                <div class="card-body table-responsive">
                    <table class='table datatable table-striped table-bordered' id="table1">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Mahasiswa</th>
                                <th>NIM Mahasiswa</th>
                                <th>Kelas</th>
                                <th>Jurusan</th>
                                <th>Prodi</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($data) > 0)
                            @foreach ($data as $item=>$row)
                            <tr>
                                    <td style="text-align: center;">{{ $item+1 }}</td>
                                    <td>{{ $row->nama}}</td>
                                    <td>{{ $row->nim }}</td>
                                    <td>{{ $row->kelas }}</td>
                                    <td>{{ $row->jurusan }}</td>
                                    <td>{{ $row->prodi }}</td>
                                    <td>
                                         <a class='btn-edit' href="{{ route('updateMahasiswa', $row->id) }}">
                               Edit
                        </a> | 
                        <a class='btn-delete' href="{{ route('deleteMahasiswa', $row->id) }}">
                            Hapus
                        </a>
                                    </td>
                            </tr>
                            @endforeach
                            @else
                                <tr>
                                    <td colspan="7"><p class="text text-center">No results found.</p></td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
    <!-- /.row -->
</div>
@endsection