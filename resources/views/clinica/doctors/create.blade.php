@extends('clinica.master')
@section('content')
    <form action="{{ route('doctor.store') }}" method="post">
        @include('clinica.doctors._form')
    </form>
@endsection