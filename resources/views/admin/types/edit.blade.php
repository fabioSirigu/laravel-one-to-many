@extends('layouts.admin')

@section('content')

<h1>Edit a type!</h1>
@include('partials.errors')
<form action="{{route('admin.types.update', $type->slug)}}" method="post" enctype="multipart/form-data">
      @csrf
      @method('PUT')
      <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" placeholder="add name" aria-describedby="titleHlper" value="{{old('name', $type->name)}}">
      </div>
      <button type="submit" class="btn btn-primary mt-3">Save Changes</button>
</form>
@endsection