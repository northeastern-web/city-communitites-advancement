<?php

namespace App\Listeners;

use Illuminate\Support\Str;
use TightenCo\Jigsaw\Jigsaw;

class BuildSearchIndex
{
    public $blacklist = [
        '/assets',
        '/404',
        '/success',
    ];
    public function handle(Jigsaw $jigsaw)
    {
        $json = collect($jigsaw->getPages())->map(function ($page, $slug) use ($jigsaw) {
            if (Str::startsWith($slug, $this->blacklist)) {
                return;
            }

            if (Str::startsWith($slug, '/staff/')) {
                return [
                    'slug' => $slug,
                    'title' => $page->name,
                    'description' => $page->description,
                ];
            }

            return [
                'slug' => $slug ?: '/',
                'title' => $page->title,
                'description' => $slug ? $page->description : $page->defaultDescription,
            ];
        })
            ->where('title')
            ->sortBy('slug')
            ->unique('title')
            ->keyBy('slug')
            ->toJson();

        $directory = $jigsaw->getDestinationPath() . '/assets/search';

        if (! is_dir($directory)) {
            mkdir($directory);
        }

        file_put_contents($directory . '/pages.js', 'window.pageIndex = ' . $json);
    }
}
