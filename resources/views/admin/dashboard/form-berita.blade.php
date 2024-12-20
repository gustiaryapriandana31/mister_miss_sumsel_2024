@extends('layouts.admin')

@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 font-weight-bold text-dark">Berita</h1>
    </div>

    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <small>{{ session('success') }}</small>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @elseif (session()->has('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <small>{{ session('error') }}</small>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    <div class="card shadow mb-4 p-5 col-md-12">
        @if ($nav['method'] == 'Insert')
            <form action="{{ route('insert-berita') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" value="{{ old('title') }}" placeholder="Enter Title" name="title" required>
                    @error('title')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="thumbail">Thumbnail</label> <br>
                    <img src="" class="img-thumbnail img-preview" alt="...." style="max-width: 400px; width: 100%">
                    <div class="custom-file">
                        <input type="file" name="thumbnail" class="custom-file-input" accept="image/*" id="thumbnail" onchange="previewImg();" required>
                        <label class="custom-file-label" for="thumbnail">Choose file</label>
                    </div>
                    @error('thumbnail')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="content">Content</label>
                    <textarea name="content" class="form-control summernote" cols="30" rows="10" required>{{ old('content') }}</textarea>
                    @error('content')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <button class="btn btn-primary" type="submit">Create New Post</button>
            </form>
        @elseif ($nav['method'] == 'Update')
            <form action="{{ route('update-berita', $post['id']) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="text" name="id" id="id" value="{{ $post['id'] }}" hidden>
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" value="{{ $post['title'] }}" placeholder="Enter Title" name="title" required>
                    @error('title')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="thumbail">Thumbnail</label> <br>
                    <img src="{{ asset('img/berita/'.$post['thumbnail']) }}" class="img-thumbnail img-preview" alt="...." style="max-width: 400px; width: 100%">
                    <div class="custom-file">
                        <input type="file" name="thumbnail" class="custom-file-input" accept="image/*" id="thumbnail" onchange="previewImg();">
                        <label class="custom-file-label" for="thumbnail">{{ $post['thumbnail'] }}</label>
                    </div>
                    @error('thumbnail')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="content">Content</label>
                    <textarea name="content" class="form-control summernote" cols="30" rows="10" required>{{ $post['content'] }}</textarea>
                    @error('content')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <button class="btn btn-primary" type="submit">Update Post</button>
            </form>
        @endif
    </div>
</div>
<!-- /.container-fluid -->

@endsection