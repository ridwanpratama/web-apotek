@extends('layouts.master')
@section('title', 'Data Transaksi')
@section('pagetitle')
    <h1>Data Transaksi</h1>
@endsection
@section('content')
<div class="section-body">
    <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
           <a href="{{ route('create_transaksi') }}" class="btn btn-icon icon-left btn-primary"><i class="far fa-edit"></i>Tambah Data</a>
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
                <th>Kode Transaksi</th>
                <th>ID Obat</th>
                <th>Nama Kasir</th>
                <th>Jumlah Beli</th>
                <th>Total Harga</th>
                <th>Tanggal Beli</th>
                <th>Action</th>
                </tr>
               </thead>
               <tbody>
               @foreach ($data as $transaksi)
                <tr> 
                    <td>{{ $transaksi->id }}</td>
                    <td>{{ $transaksi->kode_transaksi }}</td>
                    <td>{{ $transaksi->obat_id }}</td>
                    <td>{{ $transaksi->nama_kasir }}</td>
                    <td>{{ $transaksi->jumlah_beli }}</td>
                    <td>{{ $transaksi->total_harga}}</td>
                    <td>{{ $transaksi->tanggal_beli}}</td>
                    <td>
                        <a href="{{route('edit_transaksi',$transaksi->id)}}" class="badge badge-success">Edit</a>
                        <a href="{{route('destroy_transaksi',$transaksi->id)}}" onclick="return confirm('Yakin hapus data?')" class="badge badge-danger">Delete</a>
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