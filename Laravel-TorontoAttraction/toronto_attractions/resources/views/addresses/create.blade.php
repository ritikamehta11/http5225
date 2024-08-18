@extends('layout.app')

@section('content')
<div class="container">
  <h1>Add New Address</h1>

  @if ($errors->any())
    <div class="alert alert-danger">
    <ul>
      @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
    @endforeach
    </ul>
    </div>
  @endif

  <form action="{{ route('addresses.store') }}" method="POST">
    @csrf
    <div class="form-group">
      <label for="street">Street</label>
      <input type="text" class="form-control" id="street" name="street" value="{{ old('street') }}" required>
    </div>
    <div class="form-group">
      <label for="city">City</label>
      <input type="text" class="form-control" id="city" name="city" value="{{ old('city') }}" required>
    </div>
    <div class="form-group">
      <label for="zip_code">Zip Code</label>
      <input type="text" class="form-control" id="zip_code" name="zip_code" value="{{ old('zip_code') }}" required>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    <a href="{{ route('addresses.index') }}" class="btn btn-secondary">Cancel</a>
  </form>
</div>
@endsection