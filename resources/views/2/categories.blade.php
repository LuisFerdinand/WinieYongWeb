<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>WPU | Blog</title>
</head>
<body>
    <h1>Type Categories</h1>
    @foreach ($categories as $category)
    <hr>
    <ul>
        <li>
            <a href="/2/categories/{{ $category->category_slug }}">
                <h2 class="text-2xl font-bold">{{ $category->category_name }}</h2>
            </a>
    </li>
    </ul>
    <article>
        
    </article>
        
    @endforeach
</body>
</html>