@extends('layouts.admin')

@section('content')

<h1>Create a new Project!</h1>
@include('partials.errors')
<form action="{{route('admin.projects.store')}}" method="post" enctype="multipart/form-data">
      @csrf
      <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror" placeholder="Add title.." aria-describedby="titleHelper">
            <small id="titleHelper" class="text-muted">Add a new Title</small>
      </div>
      <div class="mb-3">
            <label for="cover_image" class="form-label">Cover Image</label>
            <input type="file" name="cover_image" id="cover_image" class="form-control  @error('cover_image') is-invalid @enderror" placeholder="" aria-describedby="coverImageHelper">
            <small id="coverImageHelper" class="text-muted">Add your cover image</small>
      </div>
      <div class="mb-3">
            <label for="description" class="form-label ">Description</label>
            <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description" rows="3"></textarea>
      </div>
      <div class="form-group">
            <label for="date">Creation Date</label>
            <input type="text" name="date" id="date" class="form-control @error('date') is-invalid @enderror" placeholder="Add date.." aria-describedby="dateHelper">
            <small id="dateHelper" class="text-muted">Add a date</small>
      </div>
      <button type="submit" class="btn btn-primary mt-3">Save</button>
</form>
@endsection