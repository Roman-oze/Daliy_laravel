
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>

   <form method="post" enctype="multipart/form-data" action="{{url('/upload')}}">
    @csrf
    


    <div class="form-group">
      <label for="">name</label>
      <input type="text" name="name" id="" class="form-control" placeholder="" aria-describedby="helpId">
    </div>
    <div class="form-group">
      <label for="">Upload</label>
      <input type="file" name="image" id="" class="form-control" placeholder="" aria-describedby="helpId">
    </div>

    <button class="btn btn-danger">Upload</button>
</div>
   </form>

  </body>
</html>
