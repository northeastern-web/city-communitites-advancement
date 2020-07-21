<?php

namespace App\Contentful;

use Contentful\RichText\Renderer;

class ServiceOpportunity
{
    protected $title;
    protected $slug;
    protected $short_description;
    protected $description;
    protected $image;
    protected $organization_name;
    protected $organization_website;
    protected $location;
    protected $duration;
    protected $primary_contact_name;
    protected $primary_contact_email;
    protected $primary_contact_phone;
    protected $application_deadline;

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


        $this->organization_name = $item->organizationName;
        $this->organization_website = $item->organizationWebsite;
        $this->location = $item->location;
        $this->duration = $item->duration;
        $this->primary_contact_name = $item->primaryContactName;
        $this->primary_contact_email = $item->primaryContactEmail;
        $this->primary_contact_phone = $item->primaryContactPhone;
        $this->application_deadline = $item->applicationDeadline;
    }

    public function toArray()
    {
        return [
            'title' => $this->title,
            'slug' => $this->slug,
            'short_description' => $this->short_description,
            'description' => $this->description,
            'image' => $this->image,
            'organization_name' => $this->organization_name,
            'organization_website' => $this->organization_website,
            'location' => $this->location,
            'duration' => $this->duration,
            'primary_contact_name' => $this->primary_contact_name,
            'primary_contact_email' => $this->primary_contact_email,
            'primary_contact_phone' => $this->primary_contact_phone,
            'application_deadline' => $this->application_deadline,
        ];
    }
}
