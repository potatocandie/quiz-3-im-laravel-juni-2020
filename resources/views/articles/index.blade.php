@extends('master')

@section('stylesheet')
<link href="{{ asset('/sbadmin2/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endsection

@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3 d-flex align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary inline">List of All Articles</h6>
        <a href="{{ route('articles.create')}}" class="btn btn-primary btn-icon-split">
            <span class="icon text-white-50">
                <i class="fas fa-file-alt"></i>
            </span>
            <span class=" text">Create New Article</span>
        </a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>Body</th>
                        <th>Slug</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($articles as $article)
                    <tr>
                        <td>{{ $article->id }}</td>
                        <td>{{ substr($article->judul , 0, 20) }} {{ strlen($article->judul) > 20 ? "..." : "" }}</td>
                        <td>{{ substr($article->isi , 0, 25) }} {{ strlen($article->isi) > 25 ? "..." : "" }}</td>
                        <td>{{ substr($article->slug , 0, 20) }} {{ strlen($article->slug) > 20 ? "..." : "" }}</td>
                        <td class="text-center">
                            <a href="{{ route('articles.show', $article->id) }}">
                                <button class="btn btn-outline-primary px-3">Show</button>
                            </a>
                            <a href="{{ route('articles.edit', $article->id) }}">
                                <button class="btn btn-outline-success px-4">Edit</button>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<!-- Page level plugins -->
<script src="{{ asset('/sbadmin2/vendor/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('/sbadmin2/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

<!-- Page level custom scripts -->
<script src="{{ asset('/sbadmin2/js/demo/datatables-demo.js') }}"></script>

<script>
    Swal.fire({
        title: 'Success!',
        text:  "Article Retrived!", 
        icon: 'success',
        confirmButtonText: 'OK Get Me In'
    })
</script>
@endpush