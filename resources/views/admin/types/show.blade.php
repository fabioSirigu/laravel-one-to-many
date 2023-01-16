@extends('layouts.admin')
@section('content')
<a class="btn btn-primary my-3" href="{{route('admin.types.index')}}" role="button"><i class="fas fa-angle-left fa-fw"></i></a>
<div class="container p-5">
      <div class="card text-left bg-dark text-light">
            <div class="card-body">
                  <div class="id_type">
                        <h3>Type id: {{$type->id}}</h3>
                  </div>
                  <div>
                        <h1>Name: {{$type->name}}</h1>
                  </div>
            </div>
      </div>



</div>
@endsection