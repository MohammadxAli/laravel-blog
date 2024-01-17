<x-layout>
    <article>
        <h1>
            {{ $post->title }}
        </h1>
        <div>
            {!! $post->body !!}
        </div>
    </article>
    <a href="/">Back to home</a>
</x-layout>
