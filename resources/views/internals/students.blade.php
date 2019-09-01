@extends('layout')

@section('content')
<h1>Pendaftaran</h1>

<ul>
    @foreach($students as $student)
      <li>{{$student->nama}}</li>
    @endforeach
</ul>
@endsection
