@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card uper">
        <div class="card-header">
          Add New Data
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
          <form method="post" action="{{ route('projects.store') }}">
            <div class="form-group">
              @csrf
              <label for="country_name">Name:</label>
              <input type="text" class="form-control" name="name" />
            </div>
            <div class="form-group">
              <label for="symptoms">Email:</label>
              <input type="text" class="form-control" name="email" />
            </div>
            <div class="form-group">
              <label for="cases">Age:</label>
              <input type="text" class="form-control" name="age" />
            </div>
            <button type="submit" class="btn btn-primary">Add Data</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection