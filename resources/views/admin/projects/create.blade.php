@extends('layouts.admin')

@section('content')

<h1>Create a new Project!</h1>
<form action="{{route('admin.projects.store')}}" method="post">
      @csrf
      <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" class="form-control" placeholder="Add title.." aria-describedby="titleHelper">
            <small id="titleHelper" class="text-muted">Add a new Title</small>
      </div>
</form>
@endsection