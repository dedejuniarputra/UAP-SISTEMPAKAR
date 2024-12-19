@extends('layouts.backend.app')

@section('title', 'Dashboard')

@push('css')
<link rel="stylesheet" href="{{ asset('assets/backend') }}/css/plugins/datatables.min.css" />
@endpush

@section('content')
<div class="breadcrumb">
    <h1>Posts | </h1>
    <a href="/admin/posts/create" class="btn btn-primary btn-sm">Create</a>
</div>
<div class="separator-breadcrumb border-top"></div><!-- end of main-content -->

<div class="row">
    <div class="col-md-12 mb-4">
        <div class="card text-left">
            <div class="card-body">
                <h4 class="card-title mb-3">Dataset Posts</h4>
                <p>Sistem pakar diagnosa penyakit ginjal</p>
                <div class="table-responsive">
                    <table class="display table table-striped table-bordered" id="zero_configuration_table" style="width:100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Title</th>
                                <th>Author</th>
                                <th>Visibility</th>
                                <th>Is Approved</th>
                                <th>Status</th>
                                <th>Created At</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                                @foreach ($posts as $post)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ substr($post->title, 0, 10) }}</td>
                                    <td>{{ $post->user->name }}</td>
                                    <td>{{ $post->view_count }}</td>
                                    <td>
                                        @if ($post->is_approved == true)
                                        <div class="badge badge-primary badge-pill">Approved</div>
                                        @else
                                        <div class="badge badge-danger badge-pill">Pending</div>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($post->status == true)
                                        <div class="badge badge-primary badge-pill">Published</div>
                                        @else
                                        <div class="badge badge-danger badge-pill">Pending</div>
                                        @endif
                                    </td>
                                    <td>{{ $post->created_at }}</td>
                                    <td>
                                        <a href="/admin/posts/{{ $post->id }}/edit" class="btn btn-primary btn-sm float-left mr-1">
                                            <i class="far fa-edit"></i>
                                        </a>
    
                                        <form action="/admin/posts/{{ $post->id }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Data post akan terhapus')">
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
                                <th>Title</th>
                                <th>Author</th>
                                <th>Visibility</th>
                                <th>Is Approved</th>
                                <th>Status</th>
                                <th>Created At</th>
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