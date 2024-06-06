<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bootstrap Table</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
<style>
    <style>
    /* Add your custom styles here */
    body {
            font-family:Verdana, Geneva, Tahoma, sans-serif;

        }
   .facilty{
 background-image:linear-gradient(rgb(75, 234, 245),#1dd3dad3);
  background-size: cover;
  background-position: center;

} */
    .card-body{
      margin-bottom: 20px;
      padding: 15px;
      /* background-image:linear-gradient(rgba(13, 148, 153, 0.589),#0f2469fd)         */
      background-color: #3498db;
    }

    .circular-image {
      border-radius: 50%;
      overflow: hidden;
      width: 130px; /* Adjust the size as needed */
      height: 130px; /* Adjust the size as needed */
    }



    .card:hover {
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      transform: scale(1.05);
    }
    .img{
        height: 100px;
        width: 100px;

    }

    .faculty-card {
            border-top-right-radius: 15px;
            border-bottom-left-radius: 15px;
            border-top-left-radius:50px;
            border-bottom-right-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            max-width: 300px;
            width: 100%;
            transition: transform 0.3s;
            display: block;
            margin: auto;
    }
    .faculty-card1 {
            border-top-right-radius: 50px;
            border-bottom-left-radius: 24px;
            border-top-left-radius:50px;
            border-bottom-right-radius: 24px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            max-width: 300px;
            width: 100%;
            transition: transform 0.3s;
            display: block;
            margin: auto;
        }

        .faculty-card:hover {
            transform: scale(1.05);
        }
        .faculty-card1:hover {
            transform: scale(1.05);
        }

        .faculty-card img {
         width: 100%;
        height: 100%;
        object-fit: contain;
        }

        .faculty-card-content {
            padding: 20px;
        }

        .faculty-card h2 {
            margin-bottom: 10px;
            color: #333;
        }
        .faculty-card h3{
            margin-bottom: 10px;
            color: #333;
        }

        .faculty-card p {
            color: #777;
            margin-bottom: 5px;
        }

        .faculty-card a {
            text-decoration: none;
            color: #3498db;
            font-weight: bold;
        }
        h5{
            color: rgb(8, 145, 54);
        }
        .head{
        background-color: #3498db;
     text-align: center;
        color: #fff;
        font-size: larger;
        font-family: Georgia, 'Times New Roman', Times, serif;
        border-radius: 10px;
        }
        .icon{
          height: 2.5rem;
    width: 2.5rem;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    padding: 0;
    border-radius:rgb(192, 19, 19);

        }
        .icon:hover{
          font-size:x-large;
          color: rgb(0, 0, 0);
        }
        .icon1{
          font-size:x-large;
          color: rgb(0, 0, 0);

        }
        .icon1:hover{
          font-size:x-large;
          color: rgb(51, 38, 233);
        }
  .circular{
    margin-bottom: 3rem;
    text-align: center;
    transition: transform 0.3s;

       }
  .circular img{
    width: 14rem;
    height: 14rem;
    /* border: 0.5rem solid rgba(0, 0, 0, 0.1); */
border: 3px solid black;

       }
       .circular:hover {
            transform: scale(1.05);
        }

  </style>
</style>
<body>
  <div class="container">
    <h2>Teacher Information</h2>

    <a href="{{route('create')}}" class="btn btn-dark text-white">Add</a>
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
            <td><img src="{{asset('public/teacher'.$teacher->image)}}"  width="50" height="50"></td>
            <td>{{$teacher->name}}</td>
          <td>{{$teacher->designation}}</td>
          <td>{{$teacher->fb}}</td>
          <td>{{$teacher->linked}}</td>
          <td>{{$teacher->email}}</td>
          <td>{{$teacher->phone}}</td>
          <td>

             <a href="{{ route('edit',$teacher->teacher_id) }}" class="btn btn-info"><i class="bi bi-pencil"></i> edit</a>

             <form action="{{route('delete',$teacher->teacher_id)}}" method="POST" style="display: inline;">
                 @csrf
                 @method('DELETE')
                 <button class="btn btn-danger" type="submit" >Delet
                     <i class="bi bi-trash"></i>
                 </button>
             </form>
          </td>
        </tr>

        @endforeach
      </tbody>
    </table>
  </div>

  <br>
  <br>
  <br>
  <div class="row">

    @foreach ($teachers as $teacher)

    <div class="col-md-4 ">
        <div class="circular">
            <img src="{{asset($teacher->image)}}" style="width: 80px; height:80px" >
            <h4 class="p-2 text-muted">{{$teacher->name}}</h4>
            <p class="text-muted">Lecturer : {{$teacher->designation}}</p>
            <a href="{{$teacher->fb}}"><i class="fa-brands fa-facebook icon1"></i></a>
              <a href="{{$teacher->linked}}"><i class="fa-brands fa-linkedin icon1"></i></a>
              <a href="{{$teacher->email}}"><i class="fa-solid fa-envelope icon1"></i></a>
              <a href="{{$teacher->phone}}"><i class="fa-solid fa-square-phone icon1"></i></a>
        </div>
        </div>
      @endforeach




  </div>
  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-...omitted...cksum" crossorigin="anonymous"></script>
</body>
</html>







