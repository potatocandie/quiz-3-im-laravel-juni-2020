@extends('master')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-10 m-auto">
            <div class="p-3">
                <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4"><strong>Create</strong> Article</h1>
                </div>
                <form action="{{ route('articles.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="judul">Title: </label>
                        <input name="judul" type="text" class="form-control" placeholder="article title ...">
                    </div>
                    <div class="form-group">
                        <label for="isi">Body: </label>
                        <textarea name="isi" type="text" class="form-control" rows="9"
                            placeholder="article content ..."></textarea>
                    </div>
                    <div class="row">
                        <div class="col-md-8 m-auto">
                            <input type="submit" class="btn btn-success btn-block" value=" Post Article">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection