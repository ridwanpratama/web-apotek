@extends('layouts.master')
@section('title', 'Edit Obat')
@section('pagetitle')
    <h1>Edit Obat</h1>
@endsection
@section('content')
<div class="section-body">
    <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
           <div class="card">
               <div class="card-body">
                 <form action="{{ route('update_obat', $data->id) }}" method="POST">
                   @csrf
                  <div class="row">

                    <div class="col-md-6">
                      <div class="form-group">
                        <label @error('kode_obat') class="text-danger" 
                        @enderror>ID Obat @error('kode_obat')
                             {{ $message }}
                          @enderror
                        </label>
                        <input id="kode_obat" type="text" name="kode_obat" value="{{ $data->kode_obat }}" class="form-control">
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                        <label @error('nama_obat') class="text-danger" 
                        @enderror>Nama Obat @error('nama_obat')
                             {{ $message }}
                          @enderror
                        </label>
                        <input id="nama_obat" type="text" name="nama_obat" value="{{ $data->nama_obat }}" class="form-control">
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                        <label @error('jenis_obat') class="text-danger" 
                        @enderror>Jenis Obat @error('jenis_obat')
                             {{ $message }}
                          @enderror
                        </label>
                        <input id="jenis_obat" type="text" name="jenis_obat" value="{{ $data->jenis_obat }}" class="form-control">
                      </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                          <label @error('harga_obat') class="text-danger" 
                          @enderror>Harga Obat @error('harga_obat')
                               {{ $message }}
                            @enderror
                          </label>
                          <input id="harga_obat" type="text" name="harga_obat" value="{{ $data->harga_obat }}" class="form-control">
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-group">
                          <label @error('stok_obat') class="text-danger" 
                          @enderror>Stok @error('stok_obat')
                               {{ $message }}
                            @enderror
                          </label>
                          <input id="stok_obat" type="number" name="stok_obat" value="{{ $data->stok_obat }}" class="form-control">
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-group">
                          <label @error('pemasok_id') class="text-danger" 
                          @enderror>Pemasok @error('pemasok_id')
                               {{ $message }}
                            @enderror
                          </label>
                          <input id="pemasok_id" type="text" name="pemasok_id" value="{{ $data->pemasok_id }}" class="form-control">
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