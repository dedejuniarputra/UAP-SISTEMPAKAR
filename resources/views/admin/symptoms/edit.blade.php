@extends('layouts.backend.app')

@section('title', 'Dashboard')

@section('content')
<div class="breadcrumb">
    <h1>Update Gejala</h1>
</div>
<div class="separator-breadcrumb border-top"></div><!-- end of main-content -->

<div class="row">
    <div class="col-md-6">
        <p>Ubah data gejala</p>
        <div class="card mb-5">
            <div class="card-body">
                <div class="d-flex flex-column">
                    <form action="{{ url('admin/symptoms', $symptom->id) }}" method="post">
                        @csrf
                        @method('patch')
                        <div class="form-group">
                            <label for="code">Kode</label>
                            <input class="form-control @error('code') is-invalid @enderror" name="code" id="code" type="text" value="{{ $symptom->code }}" />
                            @error('code') <small class="form-text text-danger">{{ $message }}</small> @enderror
                        </div>
                        <div class="form-group">
                            <label for="symptom">Nama Gejala</label>
                            <input class="form-control @error('symptom') is-invalid @enderror" name="symptom" id="symptom" type="text" value="{{ $symptom->symptom }}" />
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