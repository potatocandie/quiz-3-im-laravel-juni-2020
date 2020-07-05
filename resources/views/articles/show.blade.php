@extends('master')

@section('content')
<div class="row">
    @include('partials._messages')
    <div class="col-lg-8">
        <div class="card mb-4 shadow-lg">
            <div class="card-header">
                <p class="h6 text-primary">TITLE</p>
                <span class="font-weight-bold h3">{{ $article->judul }}</span>
            </div>
            <div class="card-body py-2">
                <a href="#"><span class="btn btn-primary py-0 lead">laravel</span></a>
                <a href="#"><span class="btn btn-success py-0 lead">react</span></a>
            </div>
            <div class=" card-body">
                <p class="text-primary h6 mb-3">BODY</p>
                <span class="h5">{{ $article->isi }}</span>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="card border-left-primary shadow py-2 shadow-lg">
            <div class="card-header">
                <p class="h6 text-primary">DETAIL INFO</p>
            </div>
            <div class="card-body">
                <div class="row no-gutters">
                    <div class="col mr-2">
                        <div class="h6 font-weight-bold text-gray-800 mb-1">
                            <i class="fas fas fa-unlink"> </i> Slug
                        </div>
                        <span>{{ $article->slug }}</span>

                        <div class="h6 font-weight-bold text-gray-800 mb-1 mt-3">
                            <i class="fas fas fa-calendar-check"> </i> Created at :
                        </div>
                        <span>{{ date('M j, Y h:i a', strtotime($article->created_at)) }}</span>

                        <div class="h6 font-weight-bold text-gray-800 mb-1 mt-3">
                            <i class="fas fas far fa-calendar-check"> </i> Updated at :
                        </div>
                        <span>{{ date('M j, Y h:i a', strtotime($article->updated_at)) }}</span>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="row no-gutters">
                    <div class="col-md-6">
                        <div class="mr-2">
                            <a href="{{ route('articles.edit', $article->id) }}"
                                class="btn btn-default btn-outline-primary btn-block">
                                <span class="text">Edit</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="ml-2">
                            <form action="{{ route('articles.destroy', $article->id) }}" method="POST">
                                @csrf
                                @method('delete')
                                <input type="submit" class="btn btn-default btn-outline-danger btn-block"
                                    value="Delete">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection