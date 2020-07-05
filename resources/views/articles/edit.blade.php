@extends('master')

@section('content')
<div class="container">
    @include('partials._messages')
    <div class="row">
        <div class="col-lg-10 m-auto">
            <div class="p-3">
                <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4"><strong>Edit</strong> Article</h1>
                </div>

                <form action="{{ route('articles.update', $article->id) }}" method="POST">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label for="judul">Title: </label>
                        <input name="judul" type="text" class="form-control" value="{{ $article->judul }}">
                    </div>
                    <div class="form-group">
                        <label for="tags">Tags: </label>
                        <input name="tags" type="text" class="form-control"
                            value="<?php foreach ($article->tags as $tag) {echo "$tag->content,";}?>">
                    </div>
                    <div class="form-group">
                        <label for="isi">Body: </label>
                        <textarea name="isi" type="text" class="form-control input-outline-primary"
                            rows="9">{{ $article->isi }}</textarea>
                    </div>
                    <div class="row">
                        <div class="col-md-8 m-auto">
                            <input type="submit" class="btn btn-primary btn-block" value="Update Article">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection