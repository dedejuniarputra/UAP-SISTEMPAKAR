@extends('layouts.backend.app')

@section('title', 'Dashboard')

@push('css')
    <link rel="stylesheet" href="{{ asset('assets/backend/css/select2.min.css') }}">
@endpush

@section('content')

<div class="breadcrumb">
    <h1>Cretae Posts</h1>
</div>
<div class="separator-breadcrumb border-top"></div>

<form action="{{ route('admin.posts.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-md-8">
            <div class="card mb-4">
                <div class="card-body">
                    <div class="row row-xs">
                        <div class="col-md-12">
                            <input class="form-control @error('title') is-invalid @enderror" type="text" name="title" placeholder="Title" />
                            @error('title') <strong class="text-danger">{{ $message }}</strong> @enderror
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="row row-xs">
                        <div class="col-md-12">
                                @error('content') <strong class="text-danger">{{ $message }}</strong>@enderror
                            <textarea name="content" id="ckeditor" class="form-control ckeditor"></textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card mb-5">
                <div class="card-body">
                    <div class="row row-xs">
                        <div class="col-md-12">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input form-control @error('image') is-invalid @enderror" id="customFile" name="image" onchange="return previewImage(event)">
                                <label class="custom-file-label" for="customFile">Choose file</label>
                                @error('image') <strong class="text-danger">{{ $message }}</strong> @enderror
                            </div>
                        </div>

                        <div class="col-md-12 mt-2">
                            <img id="output" class="img-thumbnail" style="width : 100%">
                        </div>

                        <div class="col-md-12 mt-2">
                            <div class="form-group">
                                <label for="category">Category</label>
                                <select class="form-control" id="categories" multiple name="categories[]">
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col-md-12 mt-2">
                            <div class="form-group">
                                <label for="category">Tags</label>
                                <select class="form-control" id="tags" multiple name="tags[]">
                                    @foreach ($tags as $tag)
                                        <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        
                        <div class="col-md-12">
                            <div class="form-group">
                                <div class="custom-control custom-checkbox sb-custom-control-solid">
                                    <input class="custom-control-input" id="status" name="status" type="checkbox" />
                                    <label class="custom-control-label" for="status">Publish</label>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-12 mt-3">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
    
@endsection

@push('js')
    <script src="{{ asset('assets/backend/js/plugins/ckeditor/ckeditor.js') }}"></script>
    <script src="{{ asset('assets/backend/js/select2.min.js') }}"></script>

    <script>
        $('.custom-file-input').on('change', function() {
            let fileName = $(this).val().split('\\').pop();
            $(this).next('.custom-file-label').addClass("selected").html(fileName);
        });

        function previewImage(event) {
            var image = document.getElementById('output');
            image.src = URL.createObjectURL(event.target.files[0]);
        }

        $('#categories').select2();
        $('#tags').select2();
    </script>
@endpush