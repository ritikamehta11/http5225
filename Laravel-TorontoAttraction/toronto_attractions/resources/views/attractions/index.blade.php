@extends('layout.app')

@section('title', 'Attractions')

@section('content')
<h1>Attractions List</h1>
<a href="{{ route('attractions.create') }}" class="btn btn-primary">Add New Attraction</a>

@if(session('success'))
  <div class="alert alert-success">
    {{ session('success') }}
  </div>
@endif

<table class="table">
  <thead>
    <tr>
      <th>Name</th>
      <th>Category</th>
      <th>Description</th>
      <!-- <th>Address</th> -->
      <th>Actions</th>
    </tr>
  </thead>
  <tbody>
    @foreach($attractions as $attraction)
    <tr>
      <td>{{ $attraction->name }}</td>
      <td>{{ $attraction->category }}</td>
      <td>{{ $attraction->description }}</td>
      <!-- <td>{{ $attraction->address->street }}, {{ $attraction->address->city }}</td> -->
      <td>
      <a href="{{ route('attractions.show', $attraction->id) }}" class="btn btn-info">View</a>
      <a href="{{ route('attractions.edit', $attraction->id) }}" class="btn btn-warning">Edit</a>
      <form action="{{ route('attractions.destroy', $attraction->id) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
      </form>
      </td>
    </tr>
  @endforeach
  </tbody>
</table>
@endsection