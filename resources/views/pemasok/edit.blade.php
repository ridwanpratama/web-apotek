@extends('layouts.master')
@section('title', 'Edit Pemasok')
@section('pagetitle')
    <h1>Edit Pemasok</h1>
@endsection
@section('content')
<div class="section-body">
    <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
           <div class="card">
               <div class="card-body">
                 <form action="" method="POST">
                   @csrf
                  <div class="row">

                    <div class="col-md-6">
                        <div class="form-group">
                          <label @error('kd_pemasok') class="text-danger" 
                          @enderror>Kode Pemasok @error('kd_pemasok')
                               {{ $message }}
                            @enderror
                          </label>
                          <input id="kd_pemasok" type="password" name="kd_pemasok" class="form-control" value="">
                        </div>
                      </div>

                    <div class="col-md-6">
                      <div class="form-group">
                        <label @error('nama_pemasok') class="text-danger" 
                        @enderror>Nama Pemasok @error('nama_pemasok')
                             {{ $message }}
                          @enderror
                        </label>
                        <input id="nama_pemasok" type="text" name="nama_pemasok" class="form-control" value="">
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