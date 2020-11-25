@extends('layouts.master')
@section('title', 'Tambah Pemasok')
@section('pagetitle')
    <h1>Create Pemasok</h1>
@endsection
@section('content')
<div class="section-body">
    <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
           <div class="card">
               <div class="card-body">
                 <form action="{{ route('simpan_pemasok') }}" method="POST">
                   @csrf
                  <div class="row">

                    <div class="col-md-6">
                        <div class="form-group">
                          <label @error('kode_pemasok') class="text-danger" 
                          @enderror>Kode Pemasok @error('kode_pemasok')
                               {{ $message }}
                            @enderror
                          </label>
                          <input id="kode_pemasok" type="password" name="kode_pemasok" class="form-control" value="{{ old('kode_pemasok') }}">
                        </div>
                      </div>

                    <div class="col-md-6">
                      <div class="form-group">
                        <label @error('nama_pemasok') class="text-danger" 
                        @enderror>Nama Pemasok @error('nama_pemasok')
                             {{ $message }}
                          @enderror
                        </label>
                        <input id="nama_pemasok" type="text" name="nama_pemasok" class="form-control" value="{{ old('nama_pemasok') }}">
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
