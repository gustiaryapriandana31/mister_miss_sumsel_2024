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

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a class="btn btn-primary" href="{{ route('insert-berita') }}"><i class="fa fa-plus"></i> Create New Post</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Title</th>
                            <th>Published</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Id</th>
                            <th>Title</th>
                            <th>Published</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php $no = 1; ?>
                        @foreach($posts as $post)
                            <tr>
                                <td>{{ $post["id"] }}</td>
                                <td>{{ $post["title"] }}</td>
                                <td>{{ date('d F Y', strtotime($post['created_at'])) }}</td>
                                <td>
                                    <a class="btn btn-md btn-warning" href="{{ route('update-berita', $post['id']) }}"><i class="fa fa-pen"></i> Edit</a>
                                    <button class="btn btn-md btn-danger" data-toggle="modal" data-target="#deletePost{{ $post['id'] }}"><i class="fa fa-trash"></i> Delete</button>
                                </td>
                            </tr>

                            <!-- Delete Modal -->
                            <div class="modal" id="deletePost{{ $post['id'] }}">
                                <div class="modal-dialog">
                                    <div class="modal-content">

                                        <!-- Modal Header -->
                                        <div class="modal-header">
                                            <h4 class="modal-title">Delete Berita ini?</h4>
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>

                                        <!-- Modal body -->
                                        <div class="modal-body">
                                            Apakah anda yakin ingin menghapus post {{ $post['title'] }}?
                                        </div>

                                        <form action="" method="post">
                                            @csrf
                                            @method('delete')
                                            <!-- Modal footer -->
                                            <input type="hidden" name="id" value="{{ $post['id'] }}">
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                                <button type="submit" name="hapus" class="btn btn-danger">Delete</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <?php $no++ ?>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

@endsection
