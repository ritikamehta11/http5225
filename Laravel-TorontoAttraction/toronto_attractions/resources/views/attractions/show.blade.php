@extends('layout.app')

@section('title', 'Attraction Details')

@section('content')
<h1>Attraction Details</h1>

<div>
  <strong>Name:</strong> {{ $attraction->name }}
</div>

<div>
  <strong>Category:</strong> {{ $attraction->category }}
</div>

<div>
  <strong>Description:</strong> {{ $attraction->description }}
</div>

<div>
  <strong>Address:</strong> {{ $attraction->address->street }}, {{ $attraction->address->city }},
  {{ $attraction->address->postal_code}}
</div>

<a href="{{ route('attractions.index') }}" class="btn btn-secondary">Back to List</a>
@endsection