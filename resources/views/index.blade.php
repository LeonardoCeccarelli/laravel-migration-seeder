<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Travel Packages</title>
</head>
<body>
    <div class="container">
        <h1 class="text-center my-4">Pacchetti viaggio</h1>
        <div class="row row-cols-4 g-3">

        @foreach ($data as $travel)
         
            <div class="col">
                <div class="card">
                    <div class="card-body">
                      <h5 class="card-title text-center text-uppercase mb-4 text-danger">{{ $travel->destination }}</h5>
                      <h6 class="my-3">Prezzo: € {{ $travel->price }}</h6>
                      <h6>Data partenza: {{ $travel->departure_date }}</h6>
                      <h6>Data ritorno: {{ $travel->arrival_date }}</h6>
                      <p class="card-text mt-5">{{ mb_strimwidth($travel->description, 0, 100, "...") }}</p>
                    </div>
                  </div>
            </div>
            
        @endforeach

        </div>
    </div>
</body>
</html>