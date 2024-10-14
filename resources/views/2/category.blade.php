<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>WPU | Blog</title>
</head>
<body>
    <h1>Type Category: {{ $category }}</h1>
    @foreach ($types as $type)
    <hr>
    <article>
        <a href="/2/posts/{{ $type->type_slug }}">
            <h2 class="text-2xl font-bold">{{ $type->type_name }}</h2>
        </a>
        <h4>{{ $type->type_brand }}</h4>
        <p>{{ $type->type_description }}</p>
    </article>
        
    @endforeach
</body>
</html>