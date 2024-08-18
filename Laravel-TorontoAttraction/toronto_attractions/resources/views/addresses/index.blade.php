@extends('layout.app')

@section('content')
<div class="container">
  <h1>Addresses</h1>
  <a href="{{ route('addresses.create') }}" class="btn btn-primary mb-3">Add New Address</a>

  @if(session('success'))
    <div class="alert alert-success">
    {{ session('success') }}
    </div>
  @endif

  <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Street</th>
        <th>City</th>
        <th>Postal code</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      @foreach($addresses as $address)
      <tr>
      <td>{{ $address->id }}</td>
      <td>{{ $address->street }}</td>
      <td>{{ $address->city }}</td>
      <td>{{ $address->postal_code }}</td>
      <td>
        <a href="{{ route('addresses.show', $address->id) }}" class="btn btn-info btn-sm">View</a>
        <a href="{{ route('addresses.edit', $address->id) }}" class="btn btn-warning btn-sm">Edit</a>
        <form action="{{ route('addresses.destroy', $address->id) }}" method="POST" style="display:inline-block;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger btn-sm"
          onclick="return confirm('Are you sure you want to delete this address?')">Delete</button>
        </form>
      </td>
      </tr>
    @endforeach
    </tbody>
  </table>
</div>
@endsection