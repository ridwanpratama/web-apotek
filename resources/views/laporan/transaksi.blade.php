@extends('layouts.master')
@section('title', 'POS - Laporan')
@section('pagetitle')
    <h1>Laporan Transaksi</h1>
@endsection
@section('content')
<div class="section-body">
    <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
                <form action="/laporan/cari" method="GET">
                @csrf
                <div class="form-row align-items-center">
                    <div class="col-auto">
                        <input type="date" class="form-control @error('startDate') is-invalid @enderror mb-3" name="startDate" id="startDate">
                        @error('startDate')
                            <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                    </div>
                    <div class="col-auto">
                        <label class="col-sm-2 mb-3"><b>-</b></label>
                    </div>
                    <div class="col-auto">
                        <input type="date" class="form-control @error('endDate') is-invalid @enderror mb-3" name="endDate" id="endDate">
                        @error('endDate')
                        <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                    </div>
                    <div class="col-auto">
                        <button type="submit" class="btn btn-primary mb-3">Cari</button>
                        @php if(isset($startDate) && isset($endDate)){ @endphp
                            <a href="{{ route('print_laporan', ['startDate' => $startDate, 'endDate' => $endDate]) }}" class="btn btn-info mb-3 ml-2">Cetak</a>
                            @php }else{ @endphp
                            <a href="{{ route('print_laporan') }}" class="btn btn-info mb-3 ml-2">Cetak</a>
                            @php } 
                        @endphp
                    </div>
            </div>
        </div>
        <hr>
    </div>
</form>
<div class="card">
    <div class="card-body">
    <table id="table" class="table table-striped table-bordered table-md">
    <thead>
        <tr>
            <th>No</th>        
            <th>Kode Transaksi</th>
            <th>Nama Obat</th>
            <th>Nama User</th>
            <th>Jumlah Beli</th>
            <th>Total Harga</th>
           	<th>Tanggal Beli</th>
        </tr>
    </thead> 
    <tbody>
        @foreach ($data as $item)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $item->kode_transaksi }}</td>
            <td>{{ $item->obat->nama_obat }}</td>
            <td>{{ $item->nama_kasir }}</td>
            <td>{{ $item->jumlah_beli }}</td>
            <td>{{ $item->total_harga }}</td>
            <td>{{ $item->tanggal_beli }}</td>
        </tr>
        @endforeach
    </tbody>
    </table>
</div>
@endsection

@push('after-script')
<script type="text/javascript">
    $(document).ready(function() {
        $('#table').DataTable();
    } );
</script>
@endpush