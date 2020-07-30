<?php

namespace App\Contentful;

use Contentful\RichText\Renderer;

class News
{
    protected $title;
    protected $body;
    protected $image;

    public function __construct($item)
    {
        $renderer = new Renderer();

        $this->title = $item->title;
        $this->body = collect($item->body->getContent())
            ->reduce(function ($carry, $node) use ($renderer) {
                return $carry . $renderer->render($node);
            }, '');

        $this->image['url'] = $item->image ? $item->image->getFile()->getUrl() : null;
        $this->image['title'] = $item->image ? $item->image->getTitle() : null;
        $this->image['description'] = $item->image ? $item->image->getDescription() : null;
    }

    public function toArray()
    {
        return [
            'title' => $this->title,
            'body' => $this->body,
            'image' => $this->image,
        ];
    }
}
