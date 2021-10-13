@extends('layouts.app')

@section('content')

    @foreach ($employees as $employee)
        <div>{{ $employee->name }} {{ $employee->surname }} {{ $employee->age }}</div>
        <form method="POST" action="{{ route('employee.destroy', $employee) }}">
            @csrf
            <button type="submit">DELETE</button>
        </form>
    @endforeach
@endsection
