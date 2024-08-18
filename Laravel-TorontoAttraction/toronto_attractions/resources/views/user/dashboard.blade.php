@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">{{ __('User Dashboard') }}</div>

        <div class="card-body">
          {{ __('Welcome to the User Dashboard!') }}
        </div>
      </div>
    </div>
  </div>
</div>
@endsection