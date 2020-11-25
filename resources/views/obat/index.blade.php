@extends('layouts.master')
@section('title', 'Data Obat')
@section('pagetitle')
    <h1>Data Obat</h1>
@endsection
@section('content')
<div class="section-body">
    <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
           <a href="{{ route('create_obat') }}" class="btn btn-icon icon-left btn-primary"><i class="far fa-edit"></i>Tambah Data</a>
           <hr>
           <div class="card">
               <div class="card-body">
                @if (session('message'))
                <div class="alert alert-success alert-dismissible show fade">
                    <div class="alert-body">
                        <button class="close" data-dismiss="alert">
                            <span>x</span>
                        </button>
                        {{ session('message') }}
                    </div>
                </div>
                @elseif (session('delete'))
                <div class="alert alert-danger alert-dismissible show fade">
                    <div class="alert-body">
                        <button class="close" data-dismiss="alert">
                            <span>x</span>
                        </button>
                        {{ session('delete') }}
                    </div>
                </div>
                @endif
           <table id="table" class="table table-striped table-bordered table-md">
               <thead>
                <tr>
                    <th>No</th>
                    <th>ID Obat</th>
                    <th>Nama Obat</th>
                    <th>Jenis Obat</th>
                    <th>Harga Obat</th>
                    <th>Stok</th>
                    <th>Pemasok</th>
                    <th>Action</th>
                </tr>
               </thead>
               <tbody>
               @foreach ($data as $obat)
                <tr> 
                    <td>{{ $obat->id }}</td>
                    <td>{{ $obat->kode_obat }}</td>
                    <td>{{ $obat->nama_obat }}</td>
                    <td>{{ $obat->jenis_obat }}</td>
                    <td>{{ $obat->harga_obat }}</td>
                    <td>{{ $obat->stok_obat }}</td>
                    <td>{{ $obat->pemasok->nama_pemasok }}</td>
                    <td>
                        <a href="{{route('edit_obat',$obat->id)}}" class="badge badge-success">Edit</a>
                        <a href="{{route('destroy_obat',$obat->id)}}" onclick="return confirm('Yakin hapus data?')" class="badge badge-danger">Delete</a>
                    </td>
                </tr>
                @endforeach
               </tbody>
           </table>
               </div>
           </div>
        </div>
    </div>
</div>
@endsection

@push('page-scripts')
  
@endpush

@push('after-script')
<script type="text/javascript">
    $(document).ready(function() {
        $('#table').DataTable();
    } );
</script>
@endpush
