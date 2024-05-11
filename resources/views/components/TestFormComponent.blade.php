{{-- <form method="POST" action="{{ url('/api/add-test') }}"> --}}
<form method="POST" action="{{ route('add.test') }}">
    @csrf
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Title</label>
        <input type="text" class="form-control" id="exampleInputEmail1" name="title" aria-describedby="emailHelp"
            value="{{ old('title') }}">
        <div id="emailHelp" class="form-text">For test Add data form.</div>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@error('title')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
