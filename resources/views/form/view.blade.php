

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>ITM Departmental Website</title>
<link rel="stylesheet" href="{{asset("frontend/styles.css")}}">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

</head>
<body>

<div class="container-fluid p-5">
    <div class="row p-5">
        <div class="col-md-12">
            <form action="{{ route('view') }}" method="GET">
                <div class="form-group">
                    <input type="search" name="search" class="form-control" id="name" placeholder="Search name or email">
                    <br>
                    <button class="btn btn-danger">Search</button>
                </div>
            </form>
        </div>
    </div>
    <div class="row text-center">
        <div class="col-md-12">
            <a href="{{route('create')}}" class="btn btn-info">Create</a>

        </div>
    </div>
</div>


<div class="container">

    <table class="table table-primary">
        <thead>
            <tr>
                <th>Student ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Gender</th>
                <th>Address</th>
                <th>Password</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($students as $student)
            <tr>
                <td>{{$student->student_id}}</td>
                <td>{{$student->name}}</td>
                <td>{{$student->email}}</td>
                <td>
                    @if ($student->gender == 'M')
                    male
                    @elseif ($student->gender == 'F')
                    Female
                    @else
                    others

                    @endif
                   </td>
                <td>{{$student->address}}</td>
                <td>{{$student->password}}</td>
                <td>
                    <a href="{{route('edit',$student->student_id)}}" class="btn btn-dark">Edit</a>
                    <a href="{{route('delete',$student->student_id)}}" class="btn btn-danger">Trash</a>
                    <a href="{{route('show',$student->student_id)}}" class="btn btn-success">show</a>
                </td>

            </tr>

        </tbody>
        @endforeach
    </table>
  </div>



</body>
</html>




