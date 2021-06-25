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
                <div class="card-header">{{ __('All Student') }}</div>

      <div class="card-body">
        <table id="example1" class="table table-bordered table-hover"  >
          <thead>
            <tr>
              <th>SL</th>
              <th>Name</th>
              <th>Roll</th>
              <th>Phone</th>
              <th>Image</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @php
              $i= 1;
            @endphp
            @foreach($students as $student)
            <tr>
              <td>{{ $i++ }}</td>
              <td>{{ $student->name }}</td>
              <td>{{ $student->roll }}</td>
              <td>{{ $student->phone }}</td>
              <td><img src="{{ URL::to($student->image) }}" class="img img-thumbnail" height="50px;" width="50px;">
              </td>
              <td>
                <a title="Edit" class="btn btn-sm btn-info" href="{{ route('student.edit',$student->id) }}">Edit</a>
                <a title="Delete" class="btn btn-sm btn-danger" href="{{ route('student.delete',$student->id) }}">Delete</a>             
              </td>
            </tr>
            @endforeach
          </tbody>

        </table>
      </div>

                </div>
            </div>
        </div>
    </div>
</div>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

</html>