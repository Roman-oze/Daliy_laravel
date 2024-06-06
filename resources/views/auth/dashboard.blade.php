<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Data Table</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <div class=" container-fluid bg-dark ">
 <div class="row  p-5">

    <div class="col-md-6 text-left">
        <a href="{{route('logins')}}" class=" btn btn-outline-light">login</a>
        <a href="{{route('registration')}}" class=" btn btn-outline-light">Registration</a>
 </div>
 <div class="col-md-6 text-right">
    <a href="{{route('logout')}}" class=" btn btn-outline-info">Logout</a>
</div>
 </div>
    </div>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header text-center">
                        <h3>User Data</h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Full Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Password</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Type</th>
                                </tr>
                            </thead>
                            <tbody>
                               @foreach ($users as $user)


                                <tr>
                                    <th scope="row">{{$user->id}}</th>
                                    <td>{{$user->fullname}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>{{$user->password}}</td>
                                    <td><img src="{{ asset($user->image) }}"  width="70" height="70" class="rounded-circle" ></td>
                                    <td>{{$user->type}}</td>
                                </tr>

                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
