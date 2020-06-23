@extends('layouts.template')

@section('content')
    <main class="">
        <h1>TASK</h1>
        <ul>
            <li>
                NAME: <a href="{{route('show', $task['id'])}}"><h3>{{$task['name']}}</h3></a>
                DESCRIPTION: <p>{{$task['description']}}</p>
                DEADLINE: <p>{{$task['deadline']}}</p>
                <small>EMPLOYEE: {{$task['employee']['firstname']}} {{$task['employee']['lastname']}}</small><br>
                <small>LOCATION:
                    <ul>
                        @foreach ($task -> employee -> locations as $location)
                    <li>{{$location -> city}}<br>{{$location -> street}}<br>{{$location -> state}}</li>
                        @endforeach
                    </ul>
                </small>


            </li>
            <button type="button"><a href="{{route('edit', $task['id'])}}">EDIT</a></button>
            <button type="button"><a href="{{route('delete', $task['id'])}}">DELETE</a></button>
        </ul>
    </main>
@endsection
