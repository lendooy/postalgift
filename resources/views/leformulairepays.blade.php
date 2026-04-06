<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    formulaire de registration de etudiant
    
    <form action="/form" method="post">
        <label for="">nom</label>
        <input type="text" placeholder="entrer les nom etudant" required>
        <br>
        <label for="">prenom</label>
        <input type="text" placeholder="entrer les prenom" required>
        <br>
        <label for="">salaire</label>
        <input type="text" placeholder="entrer les salaire" required>
        <button type="submit">ajouter</button>
    </form>

    {{config.name}}
</body>
</html>