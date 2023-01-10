@extends('layouts.admin')
@section('content')
<a class="btn btn-primary" href="{{route('admin.projects.index')}}" role="button"><i class="fas fa-angle-left fa-fw"></i></a>
<div class="container p-5">
      <div class="card text-left">
            <div class="card-body">
                  <div class="id_project">
                        <h3>Project id: {{$project->id}}</h3>
                  </div>
                  <div>
                        <h1>Title: {{$project->title}}</h1>
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