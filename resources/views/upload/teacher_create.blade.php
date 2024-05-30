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
    <form  action="{{url('store')}}" enctype="multipart/form-data" method="POST">
        @csrf

      <div class="mb-3">
        <label for="image" class="form-label">Image URL</label>
        <input type="file" class="form-control" id="imageInput" name="image" >
      </div>
      <div class="mb-3">
        <label for="nameInput" class="form-label">Name</label>
        <input type="text" class="form-control" id="nameInput" name="name" >
      </div>
      <div class="mb-3">
        <label for="designationInput" class="form-label">Designation</label>
        <input type="text" class="form-control" id="designationInput" name="designation">
      </div>
      <div class="mb-3">
        <label for="facebookInput" class="form-label">Facebook URL</label>
        <input type="text" class="form-control" id="facebookInput" name="fb" >
      </div>
      <div class="mb-3">
        <label for="linkedinInput" class="form-label">LinkedIn URL</label>
        <input type="text" class="form-control" id="linkedinInput" name="linked" >
      </div>
      <div class="mb-3">
        <label for="emailInput" class="form-label">Email</label>
        <input type="email" class="form-control" id="emailInput" name="email" >
      </div>
      <div class="mb-3">
        <label for="phoneInput" class="form-label">Phone</label>
        <input type="text" class="form-control"  name="phone" >
      </div>
      <button type="submit" class="btn btn-primary">Save</button>
    </form>
  </div>
  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-...omitted...cksum" crossorigin="anonymous"></script>
</body>
</html>
