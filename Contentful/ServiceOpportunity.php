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
    protected $type;
    protected $organization_name;
    protected $organization_website;
    protected $location;
    protected $time_of_year;
    protected $time_of_day;
    protected $duration;
    protected $number_of_volunteers;
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

        $this->type = $item->type;
        $this->organization_name = $item->organizationName;
        $this->organization_website = $item->organizationWebsite;
        $this->location = $item->location;
        $this->time_of_year = $item->timeOfYear;
        $this->time_of_day = $item->timeOfDay;
        $this->duration = $item->duration;
        $this->number_of_volunteers = $item->numberOfVolunteers;
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
            'type' => $this->type,
            'organization_name' => $this->organization_name,
            'organization_website' => $this->organization_website,
            'location' => $this->location,
            'time_of_year' => $this->time_of_year,
            'time_of_day' => $this->time_of_day,
            'duration' => $this->duration,
            'number_of_volunteers' => $this->number_of_volunteers,
            'primary_contact_name' => $this->primary_contact_name,
            'primary_contact_email' => $this->primary_contact_email,
            'primary_contact_phone' => $this->primary_contact_phone,
            'application_deadline' => $this->application_deadline,
        ];
    }
}
