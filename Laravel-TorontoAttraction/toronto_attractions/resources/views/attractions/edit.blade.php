@extends('layout.app')

@section('title', 'Edit Attraction')

@section('content')
<h1>Edit Attraction</h1>

<form action="{{ route('attractions.update', $attraction->id) }}" method="POST">
  @csrf
  @method('PUT')

  <div class="form-group">
    <label for="name">Name</label>
    <input type="text" name="name" id="name" class="form-control" value="{{ $attraction->name }}" required>
  </div>

  <div class="form-group">
    <label for="category">Category</label>
    <input type="text" name="category" id="category" class="form-control" value="{{ $attraction->category }}" required>
  </div>

  <div class="form-group">
    <label for="description">Description</label>
    <textarea name="description" id="description" class="form-control"
      required>{{ $attraction->description }}</textarea>
  </div>

  <div class="form-group">
    <label for="address_id">Address</label>
    <select name="address_id" id="address_id" class="form-control" required>
      @foreach($addresses as $address)
      <option value="{{ $address->id }}" {{ $address->id == $attraction->address_id ? 'selected' : '' }}>
      {{ $address->street }}, {{ $address->city }}
      </option>
    @endforeach
    </select>
  </div>

  <button type="submit" class="btn btn-primary">Update</button>
</form>
@endsection