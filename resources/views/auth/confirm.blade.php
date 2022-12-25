<!DOCTYPE html>
<html>
<head>
    <title>Web-tuts.com</title>
</head>
<body>
    <h1>{{ $mailData['title'] }}</h1>
    <p>{{ $mailData['body'] }}</p>

    <p>Please, don't share with it</p>
    <p>Your confirm code: {{ $mailData['code'] }}</p>
    <p>Thank you</p>
</body>
</html>
