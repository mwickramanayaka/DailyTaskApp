<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE-edge" />
    <title>Dr Strange</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="resources/css/app.css"/>

</head>
<body>
    <div class="jumbotron big-banner">
        <div class="text-center">
            <h1>Dr Strange</h1>
            <h2>in the Multiverse of Madness</h2>
</br>
            <div class="row">
                <div class="mx-auto" style="width: 900px;">
                    @foreach($errors->all() as $error)
                    <div class="alert alert-danger" role="alert">
                        {{$error}}
                    </div>
                    @endforeach
                    <form method="post" action="/saveTask">
                        {{csrf_field()}}
                        <input type="text" class="form-control" name="task" placeholder="Enter Your Avenger">
                        </br>
                        <input type="submit" class="btn btn-primary" value="SAVE">
                        <input type="button" class="btn btn-warning" value="CLEAR">
                    </form>
                    </br>
                    <table class="table table-dark">
                        <!-- <th>ID</th> -->
                        <th><h4>Avenger</h4></th>
                        <th><h4>Confirmed</h4></th>
                        <th><h4>Action</h4></th>
                        @foreach($tasks as $task)
                        <tr>
                            <!-- <td>{{$task->id}}</td> -->
                            <td>{{$task->task}}</td>
                            <td>
                                @if($task->iscompleted)
                                <button class="btn btn-success">Confirmed</button>
                                @else
                                <button class="btn btn-warning">Not Confirmed</button>
                                @endif
                            </td>
                            <td>
                                @if(!$task->iscompleted)
                                <a href="/markascompleted/{{$task->id}}" class="btn btn-primary">Mark as Confirmed</button>
                                    @else
                                    <a href="/markasnotcompleted/{{$task->id}}" class="btn btn-danger">Mark As Not Confirmed</button>
                                        @endif
                                 
                            <a href="/deletetask/{{$task->id}}" class="btn btn-warning">Delete</a>
                            <a href="/updatetask/{{$task->id}}" class="btn btn-success">Update</a>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

</html>