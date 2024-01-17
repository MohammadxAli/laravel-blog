<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="app.css" />
    <title>Posts</title>
</head>

<body>
    @foreach ($posts as $post)
        <article>
            <h1>
                <a href="/post/{{ $post->slug }}">
                    {{ $post->title }}
                </a>
            </h1>
            <div>
                <p>
                    {{ $post->excerpt }}
                </p>
            </div>
        </article>
    @endforeach
</body>

</html>
