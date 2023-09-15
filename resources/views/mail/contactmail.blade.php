<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<h1>Nuovo Contatto</h1>

<ul>
    <li>Nome : {{$name}}</li>
    <li>Motivazioni: {{$motive}}</li>
    <li>User: {{$user->name}}</li>
    <li>Email: {{$user->email}}</li>

</ul>


</body>
</html>
