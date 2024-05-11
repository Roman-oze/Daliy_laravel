

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

<div class="header">
  <ul>
    <li><a href="#">Home</a></li>
    <li><a href="#">About Us</a></li>
    <li><a href="#">Courses</a></li>
    <li><a href="#">Faculty</a></li>
    <li><a href="#">Contact</a></li>
    <li><a target="#" href="">Registration</a></li>
    {{-- <li><a target="#" href="{{route('form')}}">registration</a></li> --}}
  </ul>
</div>

<div class="content">
  <h1>Welcome to the ITM Departmental Website</h1>
  <p>This is where you'll find all the information about our department, courses, faculty, and more.</p>
</div>


<div class="container">

  <div class="table-responsive">
    <table
        class="table table-primary">
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
            @foreach($veri as $student)
            <tr>
                <td>{{$student->student_id}}</td>
                <td>{{$student->name}}</td>
                <td>{{$student->eamil}}</td>
                <td>{{$student->gender}}</td>
                <td>{{$student->address}}</td>
                <td>{{$student->password}}</td>
                <td>
                    <a href="{{route('edit',$student->student_id)}}" class="btn btn-dark">Edit</a>
                    <a href="{{route('delete',$student->student_id)}}" class="btn btn-danger">Delet</a>
                    <a href="{{route('show',$student->student_id)}}" class="btn btn-success">show</a>
                </td>

            </tr>

        </tbody>
        @endforeach
    </table>
  </div>



</body>
</html>




