@extends('layouts.master')
@section('title', 'Tambah Obat')
@section('pagetitle')
    <h1>Create Obat</h1>
@endsection
@section('content')
<div class="section-body">
    <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
           <div class="card">
               <div class="card-body">
                 <form action="#" method="POST">
                   @csrf
                  <div class="row">

                    <div class="col-md-6">
                      <div class="form-group">
                        <label @error('kd_obat') class="text-danger" 
                        @enderror>ID Obat @error('kd_obat')
                             {{ $message }}
                          @enderror
                        </label>
                        <input id="kd_obat" type="text" name="kd_obat" value="{{ old('kd_obat') }}" class="form-control">
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                        <label @error('nama_obat') class="text-danger" 
                        @enderror>Nama Obat @error('nama_obat')
                             {{ $message }}
                          @enderror
                        </label>
                        <input id="password" type="text" name="nama_obat" value="{{ old('nama_obat') }}" class="form-control">
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                        <label @error('jenis_obat') class="text-danger" 
                        @enderror>Jenis Obat @error('jenis_obat')
                             {{ $message }}
                          @enderror
                        </label>
                        <input id="jenis_obat" type="text" name="jenis_obat" value="{{ old('jenis_obat') }}" class="form-control">
                      </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                          <label @error('harga_obat') class="text-danger" 
                          @enderror>Harga Obat @error('harga_obat')
                               {{ $message }}
                            @enderror
                          </label>
                          <input id="harga_obat" type="text" name="harga_obat" value="{{ old('harga_obat') }}" class="form-control">
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-group">
                          <label @error('stok') class="text-danger" 
                          @enderror>Stok @error('stok')
                               {{ $message }}
                            @enderror
                          </label>
                          <input id="stok" type="number" name="stok" value="{{ old('stok') }}" class="form-control">
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-group">
                          <label @error('pemasok_id') class="text-danger" 
                          @enderror>Pemasok @error('pemasok_id')
                               {{ $message }}
                            @enderror
                          </label>
                          <input id="pemasok_id" type="text" name="pemasok_id" class="form-control">
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