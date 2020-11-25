@extends('layouts.master')
@section('title', 'Data Pemasok')
@section('pagetitle')
    <h1>Data Pemasok</h1>
@endsection
@section('content')
<div class="section-body">
    <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
           <a href="{{ route('create_pemasok') }}" class="btn btn-icon icon-left btn-primary"><i class="far fa-edit"></i>Tambah Data</a>
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
                    <th>Kode Pemasok</th>
                    <th>Nama Pemasok</th>
                    <th>Action</th>
                </tr>
               </thead>
               <tbody>
            
               @foreach ($data as $pemasok)
                <tr> 
                    <td>{{ $pemasok->id }}</td>
                    <td>{{ $pemasok->kode_pemasok }}</td>
                    <td>{{ $pemasok->nama_pemasok }}</td>
                    <td>
                        <a href="{{route('edit_pemasok',$pemasok->id)}}" class="badge badge-success">Edit</a>
                        <a href="{{route('destroy_pemasok',$pemasok->id)}}" onclick="return confirm('Yakin hapus data?')" class="badge badge-danger">Delete</a>
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
