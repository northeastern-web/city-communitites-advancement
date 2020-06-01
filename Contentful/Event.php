<?php

namespace App\Contentful;

use Illuminate\Support\Carbon;
use Contentful\RichText\Renderer;

class Event
{
    protected $title;
    protected $slug;
    protected $short_description;
    protected $description;
    protected $image;
    protected $date;
    protected $featured;

    public function __construct($item)
    {
        $renderer = new Renderer();

        $this->title = $item->title;
        $this->slug = $item->slug;
        $this->short_description = $item->shortDescription;
        $this->description = collect($item->description->getContent())
            ->reduce(function ($carry, $node) use ($renderer) {
                return $carry . $renderer->render($node);
            }, '');

        $this->image['url'] = $item->image ? $item->image->getFile()->getUrl() : null;
        $this->image['title'] = $item->image ? $item->image->getTitle() : null;
        $this->image['description'] = $item->image ? $item->image->getDescription() : null;

        $this->date = $item->date ? Carbon::parse($item->date)->format('n.j.y g:i a') : null;
        $this->featured = $item->featured;
    }

    public function toArray()
    {
        return [
            'title' => $this->title,
            'slug' => $this->slug,
            'short_description' => $this->short_description,
            'description' => $this->description,
            'image' => $this->image,
            'date' => $this->date,
            'featured' => $this->featured,
        ];
    }
}
