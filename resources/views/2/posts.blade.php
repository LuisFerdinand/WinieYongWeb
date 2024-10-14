<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>WPU | Blog</title>
</head>
<body>
    <h1>{{ $title }}</h1>
    @foreach ($types as $type)
    <hr>
    <article>
        <a href="/2/posts/{{ $type->type_slug }}">
            <h2 class="text-2xl font-bold">{{ $type->type_name }}</h2>
        </a>
    <a href="/2/brands/{{ $type->brand->brand_slug }}">{{ $type->brand->brand_name }}</a> in 
        <a href="/2/categories/{{ $type->category->category_slug }}">{{ $type->category->category_name }}</a>

        <h4>{{ $type->type_brand }}</h4>
        <p>{{ $type->type_description }}</p>
    </article>
        
    @endforeach
</body>
</html>