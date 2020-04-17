<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <link rel="stylesheet" href="/css/styles.css">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <script src="https://kit.fontawesome.com/8500f75e5b.js" crossorigin="anonymous"></script>
    </head>
    <body>
    <?php
        $tasks = \App\Task::all();
    ?>
        <h1 style="text-align: center">TODOs</h1>
        <div>
            <ul id="myUL">
                @foreach($tasks as $task)
                    <li>
                        <div class="task">
                            {{ $task['title'] }}
                        </div>
                        <div class="action">
                            <a href="{{ route('edit',['id'=>$task['id']]) }}"><img src="/images/web-21-512.png" alt="edit"></a>
                        </div>
                        <div class="action">
                            <a href="{{ route('destroy',['id'=>$task['id']]) }}"><img src="/images/Apple-64-512.png" alt="delete"></a>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
        <form action="{{route('add')}}">
            <button type="submit" class="create">CREATE TASK</button>
        </form>
    </body>
</html>
