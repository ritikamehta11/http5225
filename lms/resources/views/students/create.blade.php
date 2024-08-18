@extends('layouts.admin')

@section('content')
<div class="row">
  <div class="col">
    <h1 class="display">
      Add A Student
    </h1>
  </div>
</div>
<div class="row">
  <form action="{{ route('students.store')}}" method="POST">
    @if ($errors->any())
    <div class="alert alert-danger">
      <ul>
      @foreach($errors->all() as $error)
      <li>{{ $error }}</li>
    @endforeach
      </ul>

    </div>
  @endif
    @csrf
    <div class="mb-3">
      <label for="fname" class="form-label">First Name</label>
      <input type="text" class="form-control" id="fname" name="fname">
      @error('fname')
      <span class="text-danger">
      <strong>
        {{ $message }}
      </strong>
      </span>
    @enderror
    </div>
    <div class="mb-3">
      <label for="lname" class="form-label">Last Name</label>
      <input type="text" class="form-control" id="lname" name="lname">
    </div>
    <div class="mb-3">
      <label for="email" class="form-label">Email</label>
      <input type="email" class="form-control" id="email" name="email">
    </div>
    <!-- <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div> -->
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
@endsection