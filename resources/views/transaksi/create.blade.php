@extends('layouts.master')
@section('title', 'Tambah Transaksi')
@section('pagetitle')
    <h1>Create Transaksi</h1>
@endsection
@section('content')
<div class="section-body">
    <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
           <div class="card">
               <div class="card-body">
                 <form action="{{route('simpan_transaksi')}}" method="POST">
                   @csrf
                  <div class="row">

                    <div class="col-md-6">
                      <div class="form-group">
                        <label @error('kode_transaksi') class="text-danger" 
                        @enderror>Kode Transaksi @error('kode_transaksi')
                             {{ $message }}
                          @enderror
                        </label>
                        <input id="kode_transaksi" type="text" name="kode_transaksi" value="{{ old('kode_transaksi') }}" class="form-control">
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                        <label @error('obat_id') class="text-danger" 
                        @enderror>ID Obat @error('obat_id')
                             {{ $message }}
                          @enderror
                        </label>
                        <input id="obat_id" type="number" name="obat_id" value="{{ old('obat_id') }}" class="form-control">
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                        <label @error('nama_kasir') class="text-danger" 
                        @enderror>Nama Kasir @error('nama_kasir')
                             {{ $message }}
                          @enderror
                        </label>
                        <input id="nama_kasir" type="text" name="nama_kasir" value="{{ old('nama_kasir') }}" class="form-control">
                      </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                          <label @error('jumlah_beli') class="text-danger" 
                          @enderror>Jumlah Beli @error('jumlah_beli')
                               {{ $message }}
                            @enderror
                          </label>
                          <input id="jumlah_beli" type="number" name="jumlah_beli" value="{{ old('jumlah_beli') }}" class="form-control">
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-group">
                          <label @error('total_harga') class="text-danger" 
                          @enderror>Total Harga @error('total_harga')
                               {{ $message }}
                            @enderror
                          </label>
                          <input id="total_harga" type="number" name="total_harga" value="{{ old('total_harga') }}" class="form-control">
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-group">
                          <label @error('tanggal_beli') class="text-danger" 
                          @enderror>Tanggal Beli @error('tanggal_beli')
                               {{ $message }}
                            @enderror
                          </label>
                          <input id="tanggal_beli" type="date" name="tanggal_beli" class="form-control">
                        </div>
                      </div>

                  </div>
                  <div class="card-footer text-right">
                      <button class="btn btn-primary mr-1" type="submit">Submit</button>
                      <button class="btn btn-secondary" type="reset">Reset</button>
                  </div>
                 </form>
            </div>
        </div>
    </div>
</div>
@endsection

@push('page-scripts')
    
@endpush