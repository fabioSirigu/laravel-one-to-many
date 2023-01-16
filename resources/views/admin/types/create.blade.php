@extends('layouts.admin')

@section('content')

<h1>Create a new type!</h1>
@include('partials.errors')
<form action="{{route('admin.types.store')}}" method="post" enctype="multipart/form-data">
      @csrf
      <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" placeholder="add name" aria-describedby="titleHlper" value="{{old('name')}}">
      </div>
      <button type="submit" class="btn btn-primary mt-3">Save</button>
</form>
@endsection