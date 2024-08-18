@extends('layout.app')

@section('content')
<div class="container">
  <h1>Edit Address</h1>

  @if ($errors->any())
    <div class="alert alert-danger">
    <ul>
      @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
    @endforeach
    </ul>
    </div>
  @endif

  <form action="{{ route('addresses.update', $address->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
      <label for="street">Street</label>
      <input type="text" class="form-control" id="street" name="street" value="{{ old('street', $address->street) }}"
        required>
    </div>
    <div class="form-group">
      <label for="city">City</label>
      <input type="text" class="form-control" id="city" name="city" value="{{ old('city', $address->city) }}" required>
    </div>

    <div class="form-group">
      <label for="postal_code">Postal Code</label>
      <input type="text" class="form-control" id="postal_code" name="postal_code"
        value="{{ old('postal_code', $address->postal_code) }}" required>
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
    <a href="{{ route('addresses.index') }}" class="btn btn-secondary">Cancel</a>
  </form>
</div>
@endsection