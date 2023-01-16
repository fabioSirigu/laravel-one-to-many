@extends('layouts.admin')

@section('content')

<h1>Edit a Project!</h1>
@include('partials.errors')
<form action="{{route('admin.projects.update', $project->slug)}}" method="post" enctype="multipart/form-data">
      @csrf
      @method('PUT')
      <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror" placeholder="Add title.." aria-describedby="titleHelper" value="{{old('title', $project->title)}}">>
            <small id="titleHelper" class="text-muted">Add a new Title</small>
      </div>
      <div class="mb-3 d-flex gap-4">
            <img width="100" class="bg-dark" src="{{ asset('storage/' . $project->cover_image)}}" alt="">
            <div>
                  <label for="cover_image" class="form-label">Replace Cover Image</label>
                  <input type="file" name="cover_image" id="cover_image" class="form-control  @error('cover_image') is-invalid @enderror" placeholder="" aria-describedby="coverImageHelper">
                  <small id="coverImageHelper" class="text-muted">Replace the project cover image</small>
            </div>
      </div>
      <div class="mb-3">
            <label for="type_id" class="form-label">Types</label>
            <select class="form-select form-select-lg @error('type_id') 'is-invalid' @enderror" name="type_id" id="type_id">
                  <option value="">Uncategorize</option>

                  @forelse ($types as $type )
                  <option value="{{$type->id}}" {{ $type->id == old('type_id',  $project->type ? $project->type->id : '') ? 'selected' : '' }}>
                        {{$type->name}}
                  </option>
                  @empty
                  <option value="">Sorry, no types in the system.</option>
                  @endforelse

            </select>
      </div>
      <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description" rows="3">{{old('description', $project->description)}}</textarea>
      </div>
      <div class="form-group">
            <label for="date">Creation Date</label>
            <input type="text" name="date" id="date" class="form-control @error('date') is-invalid @enderror" placeholder="Add date.." aria-describedby="dateHelper" value="{{old('date', $project->date)}}">
            <small id="dateHelper" class="text-muted">Add a date</small>
      </div>
      <button type="submit" class="btn btn-primary mt-3">Save Changes</button>
</form>
@endsection