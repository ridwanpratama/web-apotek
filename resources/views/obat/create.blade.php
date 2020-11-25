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
                 <form action="{{route('simpan_obat')}}" method="POST">
                   @csrf
                  <div class="row">

                    <div class="col-md-6">
                      <div class="form-group">
                        <label @error('kode_obat') class="text-danger" 
                        @enderror>ID Obat @error('kode_obat')
                             {{ $message }}
                          @enderror
                        </label>
                        <input id="kode_obat" type="text" name="kode_obat" value="{{ old('kode_obat') }}" class="form-control">
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                        <label @error('nama_obat') class="text-danger" 
                        @enderror>Nama Obat @error('nama_obat')
                             {{ $message }}
                          @enderror
                        </label>
                        <input id="nama_obat" type="text" name="nama_obat" value="{{ old('nama_obat') }}" class="form-control">
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
                          <label @error('stok_obat') class="text-danger" 
                          @enderror>Stok  @error('stok_obat')
                               {{ $message }}
                            @enderror
                          </label>
                          <input id="stok_obat" type="number" name="stok_obat" value="{{ old('stok_obat') }}" class="form-control">
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-group">
                          <label @error('pemasok_id') class="text-danger" 
                          @enderror>Pemasok @error('pemasok_id')
                               {{ $message }}
                            @enderror
                          </label>
                          <select class="form-control" name="pemasok_id" id="pemasok_id">
                            <option value disable>Pilih Pemasok</option>
                            @foreach ($pemasok as $item)
                            <option value="{{ $item->id }}">{{ $item->nama_pemasok }}</option>
                            @endforeach
                          </select>
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
