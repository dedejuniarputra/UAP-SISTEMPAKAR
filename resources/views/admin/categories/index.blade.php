@extends('layouts.backend.app')

@section('title', 'Dashboard')

@push('css')
<link rel="stylesheet" href="{{ asset('assets/backend') }}/css/plugins/datatables.min.css" />
@endpush

@section('content')
<div class="breadcrumb">
    <h1>Categories | </h1>
    <a href="/admin/categories/create" class="btn btn-primary btn-sm">Create</a>
</div>
<div class="separator-breadcrumb border-top"></div>

<div class="row">
    <div class="col-md-12 mb-4">
        <div class="card text-left">
            <div class="card-body">
                <h4 class="card-title mb-3">Categories Post</h4>
                <p>Sistem pakar diagnosa penyakit ginjal</p>
                <div class="table-responsive">
                    <table class="display table table-striped table-bordered" id="zero_configuration_table" style="width:100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Slug</th>
                                <th>Created at</th>
                                <th>Updated at</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $category)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $category->name }}</td>
                                <td>{{ $category->slug }}</td>
                                <td>{{ $category->created_at }}</td>
                                <td>{{ $category->updated_at }}</td>
                                <td>
                                    <a href="/admin/categories/{{ $category->id }}/edit" class="btn btn-primary btn-sm float-left mr-1">
                                        <i class="far fa-edit"></i>
                                    </a>

                                    <form action="/admin/categories/{{ $category->id }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-danger btn-sm" onclick="return confirm('Data gejala akan terhapus')">
                                            <i class="far fa-trash-alt"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Slug</th>
                                <th>Created at</th>
                                <th>Updated at</th>
                                <th>Actions</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('js')
<script src="{{ asset('assets/backend') }}/js/plugins/datatables.min.js"></script>
<script src="{{ asset('assets/backend') }}/js/scripts/datatables.script.min.js"></script>
@endpush