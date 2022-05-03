<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE-edge" />
    <title>Daily Task App</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="text-center">
            <h1>Daily Tasks</h1>
            <div class="row">
                <div class="col-md-12">
                    <input type="text" class="form-control" name="task" placeholder="Enter Your Task Here">
                    </br>
                    <input type="buttom" class="btn btn-primary" value="SAVE">
                    <input type="buttom" class="btn btn-warning" value="CLEAR">
                    <table class="table table-dark">
                        <th>ID</th>
                        <th>Task</th>
                        <th>Completed</th>
                        <tr>
                            <td>1</td>
                            <td>I have to learn Laravel Today</td>
                            <td>Not yet</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

</html>