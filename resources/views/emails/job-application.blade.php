<!DOCTYPE html>
<html>

<head>
    <title>New Job Application</title>
</head>

<body>
    <h1>Job Application from {{ $data['name'] }}</h1>
    <p><strong>Age:</strong> {{ $data['age'] }}</p>
    <p><strong>School:</strong> {{ $data['school'] }}</p>
    <p><strong>CV:</strong> Attached</p>
</body>

</html>