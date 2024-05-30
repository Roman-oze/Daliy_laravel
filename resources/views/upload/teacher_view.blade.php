<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bootstrap Table</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-...omitted...cksum" crossorigin="anonymous">
</head>
<body>
  <div class="container">
    <h2>Teacher Information</h2>
    <table class="table table-striped">
      <thead>
        <tr>
          <th>Teacher ID</th>
          <th>Image</th>
          <th>Name</th>
          <th>Designation</th>
          <th>Facebook</th>
          <th>LinkedIn</th>
          <th>Email</th>
          <th>Phone</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($teachers as $teacher)

        <tr>
            <td>{{$teacher->teacher_id}}</td>
          <td><img src="{{asset($teacher->image)}}" style="width: 80px; height:80px" ></td>
          <td>{{$teacher->name}}</td>
          <td>{{$teacher->designation}}</td>
          <td>{{$teacher->fb}}</td>
          <td>{{$teacher->linked}}</td>
          <td>{{$teacher->email}}</td>
          <td>{{$teacher->phone}}</td>
          <td>
            <a href="" class="btn btn-success">Edit</a>
            <a href="" class="btn btn-danger">Delete</a>

          </td>
        </tr>

        @endforeach
      </tbody>
    </table>
  </div>
  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-...omitted...cksum" crossorigin="anonymous"></script>
</body>
</html>






<div class="row">

    <div class="col-md-4 ">
      <div class="circular">
          <img src="{{asset('frontend/image/teacher/ashikh.jpg')}}" class="mx-auto rounded-circle" alt="Circular Image">
          <br>
          <h4 class="p-2 text-muted">Ashik Rahman</h4>
          <p class="text-muted">Lecturer (Senior Scale) </p>
          <a href="https://www.facebook.com/ashik.rahman.370515"><i class="fa-brands fa-facebook icon1"></i></a>
          <a  href="https://www.facebook.com/ashik.rahman.370515"><i class="fa-brands fa-linkedin icon1"></i></a>
          <a   href="ashikur.itm@diu.edu.bd"><i class="fa-solid fa-envelope icon1"></i></a>
          <a  href="01312075927"><i class="fa-solid fa-square-phone icon1"></i></a>
      </div>
      </div>

      <div class="col-md-4 ">
        <div class="circular">
            <img src="{{asset('frontend/image/teacher/imran.jpg')}}" class="mx-auto rounded-circle" alt="Circular Image">
            <h4 class="p-2 text-muted">Mr. Nafees Imran</h4>
            <p class="text-muted">Lecturer</p>
            <a href="https://www.facebook.com/nafees.imran.7"><i class="fa-brands fa-facebook icon1"></i></a>
            <a href="https://www.facebook.com/nafees.imran.7"><i class="fa-brands fa-linkedin icon1"></i></a>
            <a href="nafees.itm@diu.edu.bd"><i class="fa-solid fa-envelope icon1"></i></a>
            <a href="01880829404"><i class="fa-solid fa-square-phone icon1"></i></a>
        </div>
        </div>
      <div class="col-md-4 ">
        <div class="circular">
          <img src="{{asset('frontend/image/teacher/raisul.jpg')}}" class="mx-auto rounded-circle" alt="Circular Image">
            <h4 class="p-2 text-muted">Raisul Kabir News</h4>
            <p class="text-muted">Lecturer</p>
            <a href="https://www.facebook.com/raisul.kabir.31"><i class="fa-brands fa-facebook icon1"></i></a>
              <a href="https://www.facebook.com/raisul.kabir.31"><i class="fa-brands fa-linkedin icon1"></i></a>
              <a href="raisul.itm0007.c@diu.edu.bd"><i class="fa-solid fa-envelope icon1"></i></a>
              <a href="01402052440"><i class="fa-solid fa-square-phone icon1"></i></a>
        </div>
        </div>
  </div>
