@extends('layout.app')

@section('title', 'Admin Dashboard')

@section('content')
<div class="container">
  <h1 class="mb-4">Admin Dashboard</h1>
  <p>Welcome, {{ Auth::user()->name }}!</p>
  <div class="row">
    <!-- Manage Attractions -->
    <div class="col-md-4 mb-4">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Manage Attractions</h5>
          <p class="card-text">Add, edit, and delete attractions.</p>
          <a href="{{ route('attractions.index') }}" class="btn btn-primary">Manage Attractions</a>
        </div>
      </div>
    </div>

    <!-- Manage Addresses -->
    <div class="col-md-4 mb-4">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Manage Addresses</h5>
          <p class="card-text">Add, edit, and delete addresses.</p>
          <a href="{{ route('addresses.index') }}" class="btn btn-primary">Manage Addresses</a>
        </div>
      </div>
    </div>



    @endsection