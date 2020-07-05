@if (Session::has('success'))
<div class="container">
    <div class="alert alert-success" role="alert">
        {{ Session::get('success') }}
    </div>
</div>
@endif

@if (count($errors) > 0)
<div class="container">
    <div class="alert alert-danger" role="alert">
        <strong>Error:</strong>
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
</div>
@endif