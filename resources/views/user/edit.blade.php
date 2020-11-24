@extends('layouts.master')
@section('title', 'Edit User')
@section('pagetitle')
    <h1>Edit User</h1>
@endsection
@section('content')
<div class="section-body">
    <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
           <div class="card">
               <div class="card-body">
                 <form action="{{ route('update_user', $user->id) }}" method="POST">
                   @csrf
                  <div class="row">

                    <div class="col-md-6">
                      <div class="form-group">
                        <label @error('name') class="text-danger" 
                        @enderror>Nama @error('name')
                             {{ $message }}
                          @enderror
                        </label>
                        <input id="email" type="name" name="name" class="form-control" value="{{ $user->name }}">
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                        <label @error('level') class="text-danger" 
                        @enderror>Level @error('level')
                             {{ $message }}
                          @enderror
                        </label>
                        <select class="form-control" name="level" id="level">  
                          <option>{{ $user->level }}</option>                      
                          <option value="admin" @if($user->level == 'admin') @endif>admin</option>
                          <option value="manager" @if($user->level == 'manager') @endif>manager</option>
                          <option value="kasir" @if($user->level == 'kasir') @endif>kasir</option>
                        </select>
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                        <label @error('password') class="text-danger" 
                        @enderror>Password @error('password')
                             {{ $message }}
                          @enderror
                        </label>
                        <input id="password" type="password" name="password" class="form-control" value="{{ $user->password }}">
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                        <label @error('email') class="text-danger" 
                        @enderror>Email @error('email')
                             {{ $message }}
                          @enderror
                        </label>
                        <input id="email" type="email" name="email" class="form-control" value="{{ $user->email }}">
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
