@extends('layout.app') @section('content')

<div class="pagetitle">
    <h1>Data Matkul</h1>
</div><!-- End Page Title -->
<div class="container-fluid">
    <div class="card">
      <div class="card-header">
        <div class="buttons">
        <a href="{{ route('addMatkul') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah Data</a>
        <a href="{{ route('pdfMatkul') }}" target="_blank" class="btn btn-danger"><i class="fas fa-print"></i> Cetak PDF</a>
    </div>
    </div>
    <div class="row">
        <div class="col-12">
                <div class="card-body table-responsive">
                    <table class='table datatable table-striped table-bordered' id="table1">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Matkul</th>
                                <th>Jumlah SKS</th>
                                <th>Jam Matkul</th>
                                <th>Ruangan Matkul</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($data) > 0)
                            @foreach ($data as $item=>$row)
                            <tr>
                                    <td style="text-align: center;">{{ $item+1 }}</td>
                                    <td>{{ $row->nama_matkul}}</td>
                                    <td>{{ $row->jumlah_sks }}</td>
                                    <td>{{ $row->jam_matkul }}</td>
                                    <td>{{ $row->ruangan_matkul }}</td>
                                    <td>
                                         <a class='btn-edit' href="{{ route('updateMatkul', $row->id) }}">
                               Edit
                        </a> | 
                        <a class='btn-delete' href="{{ route('deleteMatkul', $row->id) }}">
                            Hapus
                        </a>
                                    </td>
                            </tr>
                            @endforeach
                            @else
                                <tr>
                                    <td colspan="6"><p class="text text-center">No results found.</p></td>
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