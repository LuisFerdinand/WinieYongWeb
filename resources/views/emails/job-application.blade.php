<!DOCTYPE html>
<html>

<head>
    <title>New Job Application</title>
</head>

<body>
    <h2>New Job Application Received</h2>
    <p><strong>Job Title:</strong> {{ $data['job_title'] }}</p>
    <p><strong>Name:</strong> {{ $data['name'] }}</p>
    <p><strong>Age:</strong> {{ $data['age'] }}</p>
    <p><strong>School:</strong> {{ $data['school'] }}</p>
    <p>The CV is attached to this email.</p>
</body>

</html>