@extends('layouts.backend.app')

@section('title', 'Dashboard')

@section('content')
<div class="breadcrumb">
    <h1>Create Penyakit</h1>
</div>
<div class="separator-breadcrumb border-top"></div><!-- end of main-content -->

<div class="row">
    <div class="col-md-8">
        <p>Tambah Data Penyakit</p>
        <div class="card mb-5">
            <div class="card-body">
                <div class="d-flex flex-column">
                    <form action="{{ route('admin.diseases.store') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="code">Kode</label>
                            <input class="form-control @error('code') is-invalid @enderror" name="code" id="code" type="text" value="{{ old('code') }}" placeholder="Kode Penyakit">
                            @error('code') <small class="form-text text-danger">{{ $message }}</small> @enderror
                        </div>
                        <div class="form-group">
                            <label for="name">Nama Penyakit</label>
                            <input class="form-control @error('name') is-invalid @enderror" name="name" id="name" type="text" value="{{ old('name') }}" placeholder="Nama Penyakit">
                            @error('name') <small class="form-text text-danger">{{ $message }}</small> @enderror
                        </div>
                        <div class="form-group">
                            <label for="probability">Probabilitas</label>
                            <input class="form-control @error('probability') is-invalid @enderror" name="probability" id="probability" type="text" value="{{ old('probability') }}" placeholder="Probabilitas">
                            @error('probability') <small class="form-text text-danger">{{ $message }}</small> @enderror
                        </div>
                        <div class="form-group">
                            <label for="appear">Jumlah Muncul</label>
                            <input class="form-control @error('appear') is-invalid @enderror" name="appear" id="appear" type="text" value="{{ old('appear') }}" placeholder="Jumlah Muncul">
                            @error('appear') <small class="form-text text-danger">{{ $message }}</small> @enderror
                        </div>
                        <div class="form-group">
                            <label for="information">Informasi</label>
                            <textarea class="ckeditor" name="information" id="information" type="text">{{ old('information') }}</textarea>
                            @error('information') <small class="form-text text-danger">{{ $message }}</small> @enderror
                        </div>
                        <div class="form-group">
                            <label for="suggestion">Saran</label>
                            <textarea class="ckeditor" name="suggestion" id="suggestion" placeholder="Saran">{{ old('suggestion') }}</textarea>
                            @error('suggestion') <small class="form-text text-danger">{{ $message }}</small> @enderror
                        </div>
                        <button type="submit" class="btn btn-primary pd-x-20 mt-2">Create</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('js')
<script src="{{ asset('assets/backend/js/plugins/ckeditor/ckeditor.js') }}"></script>
@endpush