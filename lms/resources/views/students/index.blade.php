@extends('layouts.admin')
@section('content')
<div class="row">
  <div class="col">
    <h1 class="display-2">
      All Students
    </h1>
  </div>

</div>
<div class="row">


  @foreach ($students as $student)
    {{$student->fname}}

    <a href="{{route('students.edit', $student->id)}}">Update</a>
    <a href="{{route('students.trash', $student->id)}}">Delete</a><br><br>

  @endforeach
  @endsection
</div>