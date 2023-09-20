{{-- <!DOCTYPE html>
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
    <a href="{{route('make.revisor' , compact('user'))}}">Rendi Revisore.</a>


</body>
</html> --}}




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuovo Contatto</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #ffffff;
            border: 1px solid #ccc;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #333;
        }
        ul {
            list-style: none;
            padding: 0;
        }
        li {
            margin-bottom: 10px;
        }
        a {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
        }
    </style>
</head>
<body>
<div class="container">
    <h1>Nuovo Contatto</h1>
    <ul>
        <li><strong>Nome:</strong> {{$name}}</li>
        <li><strong>Motivazioni:</strong> {{$motive}}</li>
        <li><strong>User:</strong> {{$user->name}}</li>
        <li><strong>Email:</strong> {{$user->email}}</li>
    </ul>
    <p>Grazie per aggiungere un nuovo contatto. Per favore, considera di rendere questo utente un Revisore.</p>
    <a href="{{route('make.revisor', compact('user'))}}">Rendi Revisore</a>
</div>
</body>
</html>







