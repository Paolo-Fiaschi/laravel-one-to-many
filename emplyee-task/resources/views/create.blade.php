@extends('layouts.template')

@section('content')
    <main class="">
        <h1>TASK</h1>
        <form action="{{route('store')}}" method="post">
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
            <input type="text" name='name' value="">

            <label for="description">DESCRIPTION</label>
            <input type="text" name='description' value="">

            <label for="deadline">DEADLINE</label>
            <input type="text" name='deadline' value="">

            <label for="employee_id">EMPLOYEE</label>
            <select name="employee_id">
                <option value="" selected></option>
                @foreach ($employees as $employee)
                <option value="{{$employee['id']}}">
                    {{$employee['firstname']}}
                    {{$employee['lastname']}}

                </option>
                @endforeach
            </select>

            <button type="submit" name="submit" value="update">CREATE</button>
        </form>
    </main>
@endsection
