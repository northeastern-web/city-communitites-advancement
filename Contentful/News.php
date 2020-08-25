<?php

namespace App\Contentful;

use App\Contentful\Concerns\RendersRichText;

class News
{
    use RendersRichText;

    protected $title;
    protected $body;
    protected $image;

    public function __construct($item)
    {
        $this->title = $item->title;
        $this->body = $this->renderRichTextNodes($item->body);

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
