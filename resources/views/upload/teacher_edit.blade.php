<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Employee Form</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-...omitted...cksum" crossorigin="anonymous">
</head>
<body>
  <div class="container">
    <h2 class="text-danger">Teacher Information Form</h2>


    <form  action="{{route('update',$teacher->teacher_id)}}"  method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

      <div class="mb-3">
        <label for="image" class="form-label">Image URL</label>
        <input type="file" class="form-control" id="imageInput" name="image" value="{{$teacher->image}}" >
      </div>
      <div class="mb-3">
        <label for="nameInput" class="form-label">Name</label>
        <input type="text" class="form-control" id="nameInput" name="name" value="{{$teacher->name}}">
      </div>
      <div class="mb-3">
        <label for="designationInput" class="form-label">Designation</label>
        <input type="text" class="form-control" id="designationInput" name="designation" value="{{$teacher->designation}}">
      </div>
      <div class="mb-3">
        <label for="facebookInput" class="form-label">Facebook URL</label>
        <input type="text" class="form-control" id="facebookInput" name="fb" value="{{$teacher->fb}}">
      </div>
      <div class="mb-3">
        <label for="linkedinInput" class="form-label">LinkedIn URL</label>
        <input type="text" class="form-control" id="linkedinInput" name="linked" value="{{$teacher->linked}}">
      </div>
      <div class="mb-3">
        <label for="emailInput" class="form-label">Email</label>
        <input type="email" class="form-control" id="emailInput" name="email" value="{{$teacher->email}}">
      </div>
      <div class="mb-3">
        <label for="phoneInput" class="form-label">Phone</label>
        <input type="text" class="form-control"  name="phone" value="{{$teacher->phone}}">
      </div>
      <button type="submit" class="btn btn-primary">Update</button>
    </form>
  </div>
  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-...omitted...cksum" crossorigin="anonymous"></script>
</body>
</html>
