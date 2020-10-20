<!DOCTYPE html>
<html lang="en">

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Site Metas -->
    <title>Markedia - Marketing Blog Template</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    

    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,700" rel="stylesheet"> 
    
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Animate styles for this template -->
    <link href="css/animate.css" rel="stylesheet">

    <!-- Responsive styles for this template -->
    <link href="css/responsive.css" rel="stylesheet">

    <!-- Version Marketing CSS for this template -->
    <link href="css/version/marketing.css" rel="stylesheet">

</head>
<body>
    <br><br>
    @if(Session::has('mensaje'))
        <div class="alert alert-success alert-dismissible" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          {{Session::get('mensaje')}}
        </div>
    @endif

    <div id="wrapper">

        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-8 col-md-12 align-self-center" style="background-image: url('images/fondo-cabecera.jpg'); width: 100%; height: 55vh; ">
                    <h2 style="color:white;">Smart-card</h2>
                    <p class="lead" style="color:white;"> Tu mejor alternativa para viajar</p>
                    <a href="{{route('card.index')}}" class="btn btn-primary">Ingreso</a>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="newsletter-widget text-center align-self-center">
                        <h3>Salida</h3>
                        <form class="form-inline" method="POST" action="{{route('card.exit')}}">
                            @csrf
                            @method('PATCH')
                            <label>N° tarjeta</label>
                            <select name="card" class="form-control" required>
                                <option value="">Selecciona...</option>
                                @foreach($cards as $card)
                                <option value="{{$card->id}}">{{$card->number_card}}</option>
                                @endforeach
                            </select>
                            <label>Estacion destino</label>
                            <select name="station" class="form-control" required>
                                <option value="">Selecciona...</option>
                                @foreach($stations as $station)
                                <option value="{{$station->id}}">{{$station->station}}</option>
                                @endforeach
                            </select>
                            <input type="submit" value="Salida" class="btn btn-default btn-block" />
                        </form>         
                    </div>
                </div>
            </div>
        </div>    

    </div>

</body>
</html>