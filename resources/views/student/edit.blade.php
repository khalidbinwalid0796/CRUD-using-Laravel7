<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <style type="text/css">
        .mt{
            margin-top: 30px;
        }
    </style>
    <title>Laravel</title>
  </head>
<body>  
<div class="container mt">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Update Student') }}</div>

                <div class="card-body">

                <form action="{{ route('student.update',$student->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                  <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" name="name" value="{{ $student->name }}">
                  </div>

                <div class="form-group">
                    <label>Roll</label>
                    <input type="text" class="form-control" name="roll" value="{{ $student->roll }}">
                  </div>

                <div class="form-group">
                    <label>Phone</label>
                    <input type="text" class="form-control" name="phone" value="{{ $student->phone }}">
                  </div>

                <div class="form-group">
                    <label>Image</label>
                    <input type="file" class="form-control" name="image" id="image">
                    <input type="hidden" name="old_image" value="{{ $student->image }}">
                </div>

                  <button type="submit" class="btn btn-primary">Submit</button>
                </form>

                </div>
            </div>
        </div>
    </div>
</div>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
</script>
</html>