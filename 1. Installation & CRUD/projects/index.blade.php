@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="uper">
        @if(session()->get('success'))
        <div class="alert alert-success">
          {{ session()->get('success') }}
        </div><br />
        @endif
        <table class="table table-striped">
          <thead>
            <tr>
              <td>ID</td>
              <td>Name</td>
              <td>Email</td>
              <td>Age</td>
              <td colspan="2">Action</td>
            </tr>
          </thead>
          <tbody>
            @foreach($projects as $project)
            <tr>
              <td>{{$project->id}}</td>
              <td>{{$project->name}}</td>
              <td>{{$project->email}}</td>
              <td>{{$project->age}}</td>
              <td><a href="{{ route('projects.edit', $project->id)}}" class="btn btn-primary">Edit</a></td>
              <td>
                <form action="{{ route('projects.destroy', $project->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
        <a href="{{ URL::route('projects.create') }}" class="btn btn-primary"> Create </a>
        <div>
        </div>
      </div>
    </div>
    @endsection