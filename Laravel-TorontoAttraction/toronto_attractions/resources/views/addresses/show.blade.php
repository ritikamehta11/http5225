@extends('layout.app')

@section('content')
<div class="container">
  <h1>Address Details</h1>

  <div class="card">
    <div class="card-header">
      Address ID: {{ $address->id }}
    </div>
    <div class="card-body">
      <h5 class="card-title">{{ $address->street }}</h5>
      <p class="card-text">City: {{ $address->city }}</p>
      <p class="card-text">State: {{ $address->state }}</p>
      <p class="card-text">Zip Code: {{ $address->postal_code }}</p>
      <a href="{{ route('addresses.edit', $address->id) }}" class="btn btn-warning">Edit</a>
      <form action="{{ route('addresses.destroy', $address->id) }}" method="POST" style="display:inline-block;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger"
          onclick="return confirm('Are you sure you want to delete this address?')">Delete</button>
      </form>
      <a href="{{ route('addresses.index') }}" class="btn btn-secondary">Back to List</a>
    </div>
  </div>
</div>
@endsection