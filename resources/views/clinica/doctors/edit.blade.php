@extends('clinica.master')
@section('content')
    <form action="{{ route('doctor.update', $doctor->id) }}" method="post">
        @method('PUT')
        @include('clinica.doctors._form')
    </form>
@endsection