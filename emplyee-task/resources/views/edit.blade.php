@extends('layouts.template')

@section('content')
    <main class="">
        <h1>TASK</h1>
        <form action="{{route('update', $task['id'])}}" method="post">
            @csrf
            @method('POST')
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <label for="name">NAME</label>
            <input type="text" name='name' value="{{$task['name']}}">

            <label for="description">DESCRIPTION</label>
            <input type="text" name='description' value="{{$task['description']}}">

            <label for="deadline">DEADLINE</label>
            <input type="text" name='deadline' value="{{$task['deadline']}}">

            <label for="employee_id">EMPLOYEE</label>
            <select name="employee_id">
                @foreach ($employees as $employee)
                <option value="{{$employee['id']}}"
                @if ($employee['id'] == $task['employee']['id'])
                selected
                @endif
                >
                    {{$employee['firstname']}}
                    {{$employee['lastname']}}

                </option>
                @endforeach
            </select>

            <label for="locations[]">LOCATIONS</label>
            @foreach ($locations as $location)
                <div>
                    <input class="checkbox" type="checkbox" name="locations[]" value="{{$location['id']}}"
                        @foreach ($employee -> locations as $cityLocation)
                            @if ($location -> id === $cityLocation['id'])
                                checked
                            @endif
                        @endforeach
                    >{{$location['city']}}
                </div>
            @endforeach

            <button type="submit" name="submit" value="update">UPDATE</button>
        </form>
    </main>
@endsection
