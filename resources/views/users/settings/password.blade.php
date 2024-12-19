@extends('layouts.backend.app')

@section('title', 'Password')

@section('content')

<div class="breadcrumb">
    <h1>Password</h1>
</div>
<div class="separator-breadcrumb border-top"></div><!-- end of main-content -->

<div class="row">
    <div class="col-md-7 mb-4">
        <div class="card text-left">
            <div class="card-body">
                @if (session('message'))
                    <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button> 
                        <strong>{{ $message }}</strong>
                    </div>
                @endif
                <form action="/users/updatePassword" method="POST">
                    @csrf
                    @method('patch')
                    <div class="form-group mb-3">
                        <label for="current_password">Password Sebelumnya</label>
                        <input class="form-control @error('current_password') is-invalid @enderror" id="current_password" type="password" name="current_password"/>
                        @error('current_password') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="form-group mb-3">
                        <label for="new_password">Password Baru</label>
                        <input class="form-control @error('new_password') is-invalid @enderror" id="new_password" type="password" name="new_password"/>
                        @error('new_password') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="form-group mb-3">
                        <label for="password_confirmation">Konfirmasi Password</label>
                        <input class="form-control @error('password_confirmation') is-invalid @enderror" id="password_confirmation" type="password" name="password_confirmation"/>
                        @error('password_confirmation') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    
                    <div class="form-group mt-3">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
    
@endsection