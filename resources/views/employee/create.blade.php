@extends('layouts.app')

@section('content')

    <form method="POST" action="{{ route('employee.store') }}">
        <div><label>Name: </label><input type="text" name="employee_name"></div>
        <div><label>Surname: </label><input type="text" name="employee_surname"></div>
        <div><label>Age: </label><input type="text" name="employee_age"></div>
        @csrf
        <button type="submit">ADD</button>
    </form>
@endsection
