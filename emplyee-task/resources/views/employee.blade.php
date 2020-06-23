@extends('layouts.template')

@section('content')
    <main class="">
        <h1>EMPLOYEE</h1>
        @foreach ($employees as $employee)
        <h3>{{$employee -> firstname}}</h3>
        <ul>
            @foreach ($employee -> tasks as $task)
            <li>
                <a href="{{route('show', $task -> id)}}">{{$task -> name}}</a>
            </li>
            @endforeach
        </ul>
        @endforeach
    </main>
@endsection
