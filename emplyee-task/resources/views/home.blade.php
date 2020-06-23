@extends('layouts.template')

@section('content')
    <main class="">
        <h1>TASKS</h1>
        <button type="button"><a href="{{route('create')}}">Create New Task</a></button>
        <ul>
        @foreach ($tasks as $task)
            <li>
                NAME: <a href="{{route('show', $task['id'])}}"><h3>{{$task['name']}}</h3></a>
                {{-- DESCRIPTION: <p>{{$task['description']}}</p>
                DEADLINE: <p>{{$task['deadline']}}</p> --}}
                <small>{{$task['employee']['firstname']}} {{$task['employee']['lastname']}}</small>
            </li>
            @endforeach
        </ul>
    </main>
@endsection
