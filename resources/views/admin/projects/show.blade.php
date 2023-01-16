@extends('layouts.admin')
@section('content')
<a class="btn btn-primary" href="{{route('admin.projects.index')}}" role="button"><i class="fas fa-angle-left fa-fw"></i></a>
<div class="container p-5">
      <div class="card text-left bg-dark text-light">
            <div class="card-body">
                  <div class="id_project">
                        <h3>Project id: {{$project->id}}</h3>
                  </div>
                  @if($project->cover_image)
                  <img class="img-fluid" style="width:150px" src="{{asset('storage/' . $project->cover_image)}}" alt="">
                  @else
                  <div class="placeholder p-5 bg-secondary" style="width:100px">Placeholder</div>

                  @endif
                  <div>
                        <h1>Title: {{$project->title}}</h1>
                  </div>
                  <div>
                        <h1>Slug: {{$project->slug}}</h1>
                  </div>
                  <div class="type">
                        <strong>Type:</strong>
                        {{ $project->type ? $project->type->name : ' No type match'}}
                  </div>
                  <div>
                        <h3>Description: {{$project->description}}</h3>
                  </div>
                  <div>
                        <h3>Date: {{$project->date}}</h3>
                  </div>
            </div>
      </div>



</div>
@endsection