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
  <div class="row">



    @if (count($houses) > 0)

        @foreach ($houses as $house)

    <div class="col-md-4">
      <div class="card text-center">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">{{$house->title}}</h5>
        <p>Location: {{$house->location->location}}</p>
        <p>Type: {{$house->type->type}}</p>
        <p>Availability: {{$house->availability->availability}}</p>
        <p>price : {{$house->price}}</p>
      </div>
      </div>
    </div>
        @endforeach

    @else
    <div class="col-md-12 text-center">
        <h4>We dont have houses with these criteria</h4>
    </div>
    @endif

 </div>

 <div class="row mt-5">
   <div class="col-md-4 mx-auto">
   <a href="/" class="btn btn-lg btn-primary">Go to search again</a>
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
