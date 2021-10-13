@extends('layouts.app')

@section('content')
    <h1>Employees of {{ $company }} </h1>
    @foreach ($employees as $employee)
        <div>{{ $employee->name }} {{ $employee->surname }} {{ $employee->age }}
            <form method="POST" action="{{ route('employee.destroy', $employee) }}">
                @csrf
                <button type="submit">DELETE</button>
            </form>
        </div>
    @endforeach
@endsection
