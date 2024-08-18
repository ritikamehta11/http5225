@extends('layout.app')

@section('title', 'Add New Attraction')

@section('content')
<h1>Add New Attraction</h1>

<form action="{{ route('attractions.store') }}" method="POST">
  @csrf

  <div class="form-group">
    <label for="name">Name</label>
    <input type="text" name="name" id="name" class="form-control" required>
  </div>

  <div class="form-group">
    <label for="category">Category</label>
    <input type="text" name="category" id="category" class="form-control" required>
  </div>

  <div class="form-group">
    <label for="description">Description</label>
    <textarea name="description" id="description" class="form-control" required></textarea>
  </div>

  <div class="form-group">
    <label for="address_id">Address</label>
    <select name="address_id" id="address_id" class="form-control" required>
      @foreach($addresses as $address)
      <option value="{{ $address->id }}">{{ $address->street }}, {{ $address->city }}</option>
    @endforeach
    </select>
  </div>

  <button type="submit" class="btn btn-primary">Save</button>
</form>
@endsection