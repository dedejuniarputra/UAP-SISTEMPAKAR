@extends('layouts.backend.app')

@section('title', 'Dashboard')

@section('content')
<div class="breadcrumb">
    <h1>Update Penyakit</h1>
</div>
<div class="separator-breadcrumb border-top"></div><!-- end of main-content -->

<div class="row">
    <div class="col-md-8">
        <p>Ubah Data Penyakit</p>
        <div class="card mb-5">
            <div class="card-body">
                <div class="d-flex flex-column">
                    <form action="{{ url('admin/diseases/' . $disease->id) }}" method="post">
                        @csrf
                        @method('patch')
                        <div class="form-group">
                            <label for="code">Kode</label>
                            <input class="form-control @error('code') is-invalid @enderror" name="code" id="code" type="text" value="{{ $disease->code }}">
                            @error('code') <small class="form-text text-danger">{{ $message }}</small> @enderror
                        </div>
                        <div class="form-group">
                            <label for="name">Nama Penyakit</label>
                            <input class="form-control @error('name') is-invalid @enderror" name="name" id="name" type="text" value="{{ $disease->name }}">
                            @error('name') <small class="form-text text-danger">{{ $message }}</small> @enderror
                        </div>
                        <div class="form-group">
                            <label for="probability">Probabilitas</label>
                            <input class="form-control @error('probability') is-invalid @enderror" name="probability" id="probability" type="text" value="{{ $disease->probability }}">
                            @error('probability') <small class="form-text text-danger">{{ $message }}</small> @enderror
                        </div>
                        <div class="form-group">
                            <label for="appear">Jumlah Muncul</label>
                            <input class="form-control @error('appear') is-invalid @enderror" name="appear" id="appear" type="text" value="{{ $disease->appear }}">
                            @error('appear') <small class="form-text text-danger">{{ $message }}</small> @enderror
                        </div>
                        <div class="form-group">
                            <label for="information">Informasi</label>
                            <textarea class="ckeditor" name="information" type="text">{{ $disease->information }}</textarea>
                            @error('information') <small class="form-text text-danger">{{ $message }}</small> @enderror
                        </div>
                        <div class="form-group">
                            <label for="suggestion">Saran</label>
                            <textarea class="ckeditor" name="suggestion" id="suggestion">{{ $disease->suggestion }}</textarea>
                            @error('suggestion') <small class="form-text text-danger">{{ $message }}</small> @enderror
                        </div>
                        <button type="submit" class="btn btn-primary pd-x-20 mt-2">Update</button>
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