<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Parcel management system</title>
</head>
<body>
    Postal gift bienvenue chez postal gift 
    
    
    <img  width="80" src="{{asset("asset/images/box_parcel.jpg")}}">
    <br>

    @if ($lescolis>0)
        <p> il ya {{ $lescolis}} colis</p> 
    @else
        il pas de colis
    
    @endif

    <br>

      <a href="{{url('/register')}}" > enregistrer un colis</>
   
 

    
</body>
</html>