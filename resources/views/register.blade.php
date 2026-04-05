<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>enregistrer un colis</h1>

    <form action="" method="POST">
        @csrf
        <label for="add_dep">adresse depart </label>
        <input type="text" name="add_dep" placeholder="Paris" />
        <br>
        <label for="add_arr">address arriver</label>
        <input type="text" name="add_arr" placeholder="Cheik moussa" />
        <br>
        <label for="weight_colis">poids du colis</label>
        <input type="number" name="weight_colis" placeholder="Ex : 10" />
        <br>
        <button type="submit">enregistrer</button>
    </form>

    <a href="{{url('/')}}">retour</>
</body>
</html>