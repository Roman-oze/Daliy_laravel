<!doctype html>
<html lang="en">

<head>
    <title>Register</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <nav class="nav justify-content-center">
      <a class="nav-link active btn btn-danger" href="{{route('view')}}">student View</a>
    </nav>

    <div class="container mt-5">
        <div class="row justify-content-center ">
          <div class="col-md-6">
            <div class="card bg-info">

              <div class="card-body">
                <form class=" p-2" action="{{url('/store')}}" method="post">
                    @csrf

                    <div class="card-header bg-danger text-center">
                        Registration Form
                        </div>

                        <x-input type="text" name="name" label="Enter your name" class="form-control border border-danger"/>
                        <x-input type="email" name="email" label=" email" class="form-control border-danger"/>
                        <div>
                        <label for="">Gender:</label><br>
                        <select  name="gender" required>
                            <option value="M" type="checkbox">Male</option>
                            <option value="F">Female</option>
                            <option value="o">Other</option>
                        </select><br><br>
                        <span class="text-danger">
                            @error('gender')
                            {{$message}}
                            @enderror
                         </span>
                    </div>
                        <x-input type="address" name="address" label="address" class="form-control border-danger"/>
                        <x-input type="password" name="password" label=" password" class="form-control border-danger"/>
                        <x-input type="password" name="password_confirm" label="confirm password" class="form-control border-danger"/>


                  <button type="submit" class="btn btn-danger">Submit</button>


                </form>
              </div>
            </div>
          </div>
        </div>
      </div>

      <br>
      <br>
      <br>
      <br>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>
