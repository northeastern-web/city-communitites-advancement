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
        $json = collect($jigsaw->getPages())->map(function ($page, $slug) {
            if (Str::startsWith($slug, $this->blacklist)) {
                return;
            }

            return [
                    'slug' => $slug ?: '/',
                    'title' => $page->title,
                    'description' => $slug ? $page->description : $page->defaultDescription,
                ];
        })
            ->where('title')
            ->keyBy('slug')
            ->toJson();

        $directory = $jigsaw->getDestinationPath() . '/assets/search';

        if (! is_dir($directory)) {
            mkdir($directory);
        }

        file_put_contents($directory . '/pages.js', 'window.pageIndex = ' . $json);
    }
}
