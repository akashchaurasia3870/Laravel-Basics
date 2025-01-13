<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>All User Data</h1>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NAME</th>
                    <th>EMAIL</th>
                    <th>AGE</th>
                    <th>CITY</th>
                    <th>ACTION</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $id => $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->age}}  </td>
                    <td>{{$user->city}} </td>
                    <td><a href="{{route('view.user',$user->id)}}">View</a></td>
                </tr>
                @endforeach
            </tbody>
        </body>
        </table>
</body>
</html>