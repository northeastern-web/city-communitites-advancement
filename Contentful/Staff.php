<?php

namespace App\Contentful;

use App\Contentful\Concerns\RendersRichText;
use Contentful\RichText\Renderer;

class Staff
{
    use RendersRichText;

    protected $name;
    protected $lastName;
    protected $slug;
    protected $title;
    protected $bio;
    protected $image;
    protected $email;
    protected $phone;
    protected $leadership;

    public function __construct($item)
    {
        $this->name = $item->name;
        $this->lastName = $item->lastName;
        $this->slug = $item->slug;
        $this->bio = $this->renderRichTextNodes($item->bio);

        $this->image['url'] = $item->image ? $item->image->getFile()->getUrl() : null;
        $this->image['name'] = $item->image ? $item->image->getTitle() : null;
        $this->image['description'] = $item->image ? $item->image->getDescription() : null;

        $this->title = $item->title;
        $this->email = $item->email;
        $this->phone = $item->phone;
        $this->leadership = $item->leadership ?? false;
    }

    public function toArray()
    {
        return [
            'name' => $this->name,
            'lastName' => $this->lastName,
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
