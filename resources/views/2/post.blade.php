<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=h2, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>{{ $type->type_name }}</h2>
    <p>
        <a href="/2/brands/{{ $type->brand->brand_slug }}">
            {{ $type->brand->brand_name }}
        </a>
        in 
        <a href="/2/categories/{{ $type->category->category_slug }}">
            {{ $type->category->category_name }}
        </a>
    </p>
    <h2>{{ $type->type_brand }}</h2>
    {!! $type->type_description !!}
    <br>
    <a href="/2/posts" class="block">Back</a>
</body>
</html>