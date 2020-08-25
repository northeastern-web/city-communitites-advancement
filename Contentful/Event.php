<?php

namespace App\Contentful;

use App\Contentful\Concerns\RendersRichText;
use Illuminate\Support\Carbon;

class Event
{
    use RendersRichText;

    protected $title;
    protected $slug;
    protected $short_description;
    protected $description;
    protected $image;
    protected $start_date;
    protected $unformatted_start_date;
    protected $end_date;
    protected $start_time;
    protected $end_time;
    protected $signature;
    protected $rsvp_url;

    public function __construct($item)
    {
        $this->title = $item->title;
        $this->slug = $item->slug;
        $this->short_description = $item->shortDescription;
        $this->description = $this->renderRichTextNodes($item->description);

        $this->image['url'] = $item->image ? $item->image->getFile()->getUrl() : null;
        $this->image['title'] = $item->image ? $item->image->getTitle() : null;
        $this->image['description'] = $item->image ? $item->image->getDescription() : null;

        $this->start_date = $item->startDate ? Carbon::parse($item->startDate)->format('n.j.y') : null;
        $this->unformatted_start_date = $item->startDate ? Carbon::parse($item->startDate) : null;
        $this->end_date = $item->endDate ? Carbon::parse($item->endDate)->format('n.j.y') : null;
        $this->start_time = $item->startTime ? Carbon::parse($item->startTime)->format('g:ia') : null;
        $this->end_time = $item->endTime ? Carbon::parse($item->endTime)->format('g:ia') : null;

        $this->signature = $item->signature;
        $this->rsvp_url = $item->rsvpUrl;
    }

    public function toArray()
    {
        return [
            'title' => $this->title,
            'slug' => $this->slug,
            'short_description' => $this->short_description,
            'description' => $this->description,
            'image' => $this->image,
            'start_date' => $this->start_date,
            'unformatted_start_date' => $this->unformatted_start_date,
            'end_date' => $this->end_date,
            'start_time' => $this->start_time,
            'end_time' => $this->end_time,
            'signature' => $this->signature,
            'rsvp_url' => $this->rsvp_url,
        ];
    }
}
