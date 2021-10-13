@extends('layouts.app')

@section('content')

    @foreach ($companies as $company)
        <div>{{ $company->name }} {{ $company->email }} {{ $company->phone_number }}</div>
    @endforeach
@endsection
