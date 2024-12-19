@extends('layouts.backend.app')

@section('title', 'Dashboard')

@section('content')
<div class="breadcrumb">
    <h1>Update Rules</h1>
</div>
<div class="separator-breadcrumb border-top"></div>

<div class="row">
    <div class="col-md-6">
        <p>Update Data Rule</p>
        <div class="card mb-5">
            <div class="card-body">
                <div class="d-flex flex-column">
                    <form action="{{ url('admin/rules', $rule->id) }}" method="post">
                        @csrf
                        @method('patch')
                        <div class="form-group">
                            <label for="diseases">Penyakit</label>
                            <select class="form-control" id="diseases" name="disease_id">
                                @foreach ($diseases as $disease)
                                <option value="{{ $disease->id }}">{{ $disease->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="symptoms">Gejala</label>
                            <select class="form-control" id="symptoms" name="symptom_id">
                                @foreach ($symptoms as $symptom)
                                    <option value="{{ $symptom->id }}">{{ $symptom->symptom }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="probability">Probabilitas</label>
                            <input type="text" class="form-control @error('probability') is-invalid @enderror" id="probability" name="probability" value="{{ $rule->probability }}">
                            @error('probability') <small class="form-text text-danger">{{ $message }}</small> @enderror
                        </div>
                        
                        <button type="submit" class="btn btn-primary pd-x-20 mt-2">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection