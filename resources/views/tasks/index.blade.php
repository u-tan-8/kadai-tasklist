@extends('layouts.app')

@section('content')

    <h1>タスク一覧</h1>
    
    @if (Auth::check())
    
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>id</th>
                    <th>ステイタス</th>
                    <th>タスク</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tasks as $task)
                <tr>
                    <td>{!! link_to_route('tasks.show', $task->id, ['id' => $task->id]) !!}</td>
                    <td>{{ $task->status }}</td>
                    <td>{{ $task->content }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    
    
    {!! link_to_route('tasks.create', '新規タスクの投稿', [],['class' => 'btn btn-primary']) !!}

    @else
        <div class="jumbotron">
            <div class="text-center">
                <h1>Welcome to the Tasklist</h1>
                {!! link_to_route('signup.get', 'Sign up now!', [], ['class' => 'btn btn-primary mt-3']) !!}
            </div>
        </div>
    @endif



@endsection