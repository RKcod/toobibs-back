<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="utf-8">
</head>
<body>
<h3>Changez votre mot de passe</h3>
<div>
    Veuillez cliquez sur ce lien pour changer votre mot de pass: <a href="{{config('app.url')}}/{{$reseturl}}?email={{$email}}&token={{$token}}">{{config('app.url')}}/{{$reseturl}}?email={{$email}}&token={{$token}}</a>.
</div>
</body>
</html>
