<?php

namespace App\Contentful;

use Contentful\RichText\Renderer;

class Staff
{
    protected $name;
    protected $slug;
    protected $title;
    protected $bio;
    protected $image;
    protected $email;
    protected $phone;
    protected $leadership;

    public function __construct($item)
    {
        $renderer = new Renderer();

        $this->name = $item->name;
        $this->slug = $item->slug;
        $this->bio = collect($item->bio->getContent())
            ->reduce(function ($carry, $node) use ($renderer) {
                return $carry . $renderer->render($node);
            }, '');

        $this->image['url'] = $item->image ? $item->image->getFile()->getUrl() : null;
        $this->image['name'] = $item->image ? $item->image->getTitle() : null;
        $this->image['description'] = $item->image ? $item->image->getDescription() : null;

        $this->title = $item->title;
        $this->email = $item->email;
        $this->phone = $item->phone;
        $this->leadership = $item->leadership;
    }

    public function toArray()
    {
        return [
            'name' => $this->name,
            'slug' => $this->slug,
            'title' => $this->title,
            'bio' => $this->bio,
            'image' => $this->image,
            'email' => $this->email,
            'phone' => $this->phone,
            'leadership' => $this->leadership,
        ];
    }
}
