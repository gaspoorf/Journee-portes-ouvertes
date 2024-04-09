<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JPO IUT de Chambéry</title>
    <style>
        header{
            background-color: #2662D7;
            width: 100%;
            height: 200px
        }

        .center{
            text-align: center;
        }


        body {
            font-family: Arial, sans-serif;
        }
        h1 {
            font-size: 24px;
            margin-bottom: 20px;
        }

        h2 {
            font-size: 15px;
        }

        .destination {
            margin-bottom: 20px;
        }
        
        .align{
            text-align: center;
            gap: 50px;
            padding-top: 70px;
            align-items: center;
        }

        
    </style>
</head>
<body>
    <header class="center">
        <div class="align">
            <img src="{{ public_path('/img/iut.png') }}" style="height: 100px;"> 
            <img src="{{ public_path('/img/USMB.png') }}" style="height: 100px;"> 
        </div>
        
    </header>

    <div class="center">
        <h1>Mon compte rendu JPO IUT de Chambéry</h1>
    </div>    
    
        <h2>Récapitulatif de mes visites :</h2>
        
        @foreach ($destinations as $destination)
            <div class="destination">
                <h2>{{ $destination->name }}</h2>
                <p>Description : {{ $destination->description }}</p>
            </div>
        @endforeach
   
    
</body>
</html>




