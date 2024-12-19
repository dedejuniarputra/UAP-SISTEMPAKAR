@extends('layouts.backend.app')

@section('title', 'Dashboard')

@section('content')
<div class="breadcrumb">
    <h1>Create Tag</h1>
</div>
<div class="separator-breadcrumb border-top"></div>

<div class="row">
    <div class="col-md-6">
        <p>Edit Data Tag</p>
        <div class="card mb-5">
            <div class="card-body">
                <div class="d-flex flex-column">
                    <form action="{{ url('admin/tags', $tag->id) }}" method="post">
                        @csrf
                        @method('patch')
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input class="form-control" name="name" id="name" type="text" value="{{ $tag->name }}">
                        </div>

                        <button type="submit" class="btn btn-primary pd-x-20 mt-2">Create</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection