<!DOCTYPE html>
<html>

<head>
    <title>{{ $data['subject'] }} from {{ $data['first_name'] }} </title>
</head>

<body>
    <h2>{{ $data['subject'] }}</h2>

    <p><strong>Name:</strong> {{ $data['first_name'] }} {{ $data['last_name'] }}</p>
    <p><strong>Email:</strong> {{ $data['email'] }}</p>
    <p><strong>Message:</strong> {{ $data['message'] }}</p>
</body>

</html>