<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Receive Mail</title>
</head>
<body>
    <H1>Nouveau message du site AINA</H1>
    <p>Nom: {{ $data['name'] }}</p>
    <p>Objet: {{ $data['subject'] }}</p>
    <p>email du client: {{ $data['email'] }}</p>
    <textarea>message: {{ $data['message'] }}</textarea>
    <p>fichier: {{ $data['file'] }}</p>
</body>
</html>