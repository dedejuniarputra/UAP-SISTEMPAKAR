@extends('layouts.backend.app')

@section('title', 'Dashboard')

@section('content')
<div class="breadcrumb">
    <h1>Create Gejala</h1>
</div>
<div class="separator-breadcrumb border-top"></div><!-- end of main-content -->

<div class="row">
    <div class="col-md-6">
        <p>Tambah data gejala</p>
        <div class="card mb-5">
            <div class="card-body">
                <div class="d-flex flex-column">
                    <form action="{{ route('admin.symptoms.store') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="code">Kode</label>
                            <input class="form-control @error('code') is-invalid @enderror" name="code" id="code" type="text" placeholder="Kode Gejala" value="{{ old('code') }}"  />
                            @error('code') <small class="form-text text-danger">{{ $message }}</small> @enderror
                        </div>
                        <div class="form-group">
                            <label for="symptom">Nama Gejala</label>
                            <input class="form-control @error('symptom') is-invalid @enderror" name="symptom" id="symptom" type="text" placeholder="Nama Gejala" value="{{ old('symptom') }}" />
                            @error('symptom') <small class="form-text text-danger">{{ $message }}</small> @enderror
                        </div>
                        <button type="submit" class="btn btn-primary pd-x-20 mt-2">Create</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection