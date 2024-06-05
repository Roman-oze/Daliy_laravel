<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card mt-5">
                    <div class="card-header text-center">
                        <h3>User Profile</h3>
                    </div>
                    <div class="card-body">
                            <!-- CSRF Token for Laravel -->
                            <form action="{{route('store')}}" method="POST" enctype="multipart/form-data">

                            @csrf
                            <div class="mb-3">
                                <label  class="form-label">Full Name</label>
                                <input type="text" class="form-control" id="name" name="name"  required>
                            </div>
                            <div class="mb-3">
                                <label  class="form-label">Email</label>
                                <input type="email" class="form-control"  name="email"  required>
                            </div>
                            <div class="mb-3">
                                <label  class="form-label">Password</label>
                                <input type="password" class="form-control"  name="password"  required>
                            </div>
                            <div class="mb-3">
                                <label for="image" class="form-label">Profile Image</label>
                                <input type="file" class="form-control"  name="image">
                            </div>
                            <div class="mb-3">
                                <label for="type" class="form-label">Type</label>
                                <select class="form-control" id="type" name="type">
                                    <option value="student">Student</option>
                                    <option value="teacher">Teacher</option>
                                </select>
                            </div>
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-primary" name="">Register</button>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer text-center">
                        <small>Already have an account? <a href="/login">Login</a></small>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
