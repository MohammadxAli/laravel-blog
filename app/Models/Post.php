<?php

namespace App\Models;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\File;
use Spatie\YamlFrontMatter\YamlFrontMatter;


class Post
{
    public function __construct(public $title, public $excerpt, public $date, public $body, public $slug)
    {
    }

    public static function all()
    {
        return cache()->rememberForever('posts.all', function () {
            return collect(File::files(resource_path("posts")))
                ->map(fn($file) => YamlFrontMatter::parseFile($file))
                ->map(
                    fn($document) => new Post(
                        $document->title,
                        $document->excerpt,
                        $document->date,
                        $document->body(),
                        $document->slug,
                    )
                )
                ->sortByDesc('date');
        });
    }

    public static function find($slug)
    {
        if (!file_exists(resource_path("posts/{$slug}.html"))) {
            throw new ModelNotFoundException();
        }

        return static::all()->where("slug", $slug)->first();
    }
}
