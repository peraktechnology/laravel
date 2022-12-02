@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card uper">
        <div class="card-header">
          Edit Data
        </div>
        <div class="card-body">
          @if ($errors->any())
          <div class="alert alert-danger">
            <ul>
              @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div><br />
          @endif
          <form method="post" action="{{ route('projects.update', $project->id ) }}">
            <div class="form-group">
              @csrf
              @method('PATCH')
              <label for="country_name">Name:</label>
              <input type="text" class="form-control" name="name" value="{{ $project->name }}" />
            </div>
            <div class="form-group">
              <label for="symptoms">Symptoms :</label>
              <input type="text" class="form-control" name="email" value="{{ $project->email }}" />
            </div>
            <div class="form-group">
              <label for="cases">Cases :</label>
              <input type="text" class="form-control" name="age" value="{{ $project->age }}" />
            </div>
            <button type="submit" class="btn btn-primary">Update Data</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection