@extends('layouts.admin')

@section('content')

<h1>Edit a Project!</h1>
<form action="{{route('admin.projects.update', $project->id)}}" method="post">
      @csrf
      @method('PUT')
      <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" class="form-control" placeholder="Add title.." aria-describedby="titleHelper" value="{{old('title', $project->title)}}">>
            <small id="titleHelper" class="text-muted">Add a new Title</small>
      </div>
      <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" name="description" id="description" rows="3">{{old('description', $project->description)}}</textarea>
      </div>
      <div class="form-group">
            <label for="date">Creation Date</label>
            <input type="text" name="date" id="date" class="form-control" placeholder="Add date.." aria-describedby="dateHelper" value="{{old('date', $project->date)}}">
            <small id="dateHelper" class="text-muted">Add a date</small>
      </div>
      <button type="submit" class="btn btn-primary mt-3">Save</button>
</form>
@endsection