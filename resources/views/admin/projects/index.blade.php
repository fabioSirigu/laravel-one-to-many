@extends('layouts.admin')

@section('content')
<h1>Projects by NazOne</h1>
<a href="{{route('admin.projects.create')}}" class="btn btn-primary position-fixed bottom-0 m-3" role="button">Add Project</a>
<div class="table-responsive pt-5">
      <table class="table table-striped
      table-hover	
      table-borderless
      table-primary
      align-middle">
            <thead class="table-light">

                  <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Date Create</th>
                        <th>Actions</th>
                  </tr>
            </thead>
            <tbody class="table-group-divider">
                  @forelse ($projects as $project)
                  <tr class="table-primary">
                        <td scope="row">{{$project->id}}</td>
                        <td>{{$project->title}}</td>
                        <td>{{$project->date}}</td>
                        <td>
                              <a href="{{route('admin.projects.show', $project->id)}}"><i class="fas fa-eye fa-md"></i></a>
                              <a href="{{route('admin.projects.edit', $project->id)}}"><i class="fas fa-pencil fa-md"></i></a>
                              <a href="{{route('admin.projects.show', $project->id)}}"><i class="fas fa-trash fa-md"></i></a>
                        </td>
                  </tr>
                  @empty
                  <tr class="table-primary">
                        <td>No projects found!</td>
                  </tr>
                  @endforelse
            </tbody>
            <tfoot>

            </tfoot>
      </table>
</div>


@endsection