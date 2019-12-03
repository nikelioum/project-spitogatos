<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!--Custom CSS-->
    <link rel="stylesheet" type="text/css" href="css/custom.css">

    <title>Spiti24 | Portal</title>

  </head>
  <body>





<div class="container mt-5">

  <div class="row mb-5">
    <div class="col-md-4 mx-auto">
    <a href="/login"><h4>Go to admin panel</h4></a>
  </div>
 </div>


    @if ($errors->any())
    <div class="row">
      <div class="col-md-12">
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>
      <ul>
          @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
          @endforeach
      </ul>
    </strong>
     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
     </button>
    </div>
  </div>
</div>
  @endif

<div class="row">

    <div class="col-md-4">
      <h4>Search form</h4>
      <form action="/search" method="POST">
        {{csrf_field()}}

       <div class="form-group">
        <label for="exampleInputPassword1">Price min</label>
        <input type="text" class="form-control" id="pricemin" name="pricemin">
       </div>

       <div class="form-group">
        <label for="exampleInputPassword1">Price max</label>
        <input type="text" class="form-control" id="pricemax" name="pricemax">
       </div>

       <div class="form-group">
        <label for="exampleFormControlSelect1">Location</label>
        <select class="form-control" id="location" name="location">
          @foreach ($locations as $location)
           <option value="{{$location->id}}">{{$location->location}}</option>
          @endforeach
        </select>
       </div>

       <div class="form-group">
        <label for="exampleFormControlSelect1">Availability</label>
        <select class="form-control" id="availability" name="availability">
          @foreach ($availabilities as $availability)
           <option value="{{$availability->id}}">{{$availability->availability}}</option>
          @endforeach
        </select>
       </div>

       <div class="form-group">
        <label for="exampleInputPassword1">Meters min</label>
        <input type="text" class="form-control" id="metresmin" name="metresmin">
       </div>

       <div class="form-group">
        <label for="exampleInputPassword1">Meters max</label>
        <input type="text" class="form-control" id="metresmax" name="metresmax">
       </div>

       <div class="form-group">
        <label for="exampleFormControlSelect1">Type</label>
        <select class="form-control" id="type" name="type">
          @foreach ($types as $type)
           <option value="{{$type->id}}">{{$type->type}}</option>
          @endforeach
        </select>
       </div>

       <button type="submit" class="btn btn-primary">Search</button>

      </form>
    </div>




  </div>
</div>






    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
