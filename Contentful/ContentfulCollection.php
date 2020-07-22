<?php

namespace App\Contentful;

use App\Contentful\Event;
use App\Contentful\Staff;
use Contentful\Delivery\Query;
use Contentful\Delivery\Client;
use App\Contentful\ServiceOpportunity;

class ContentfulCollection
{
    public $client;

    public function __construct($apiKey, $spaceId)
    {
        $this->client = new Client(
            $apiKey,
            $spaceId
        );
    }

    public function getEvents()
    {
        $query = (new Query)->setContentType('event')
            ->where('fields.tag.sys.contentType.sys.id', 'tag')
            ->where('fields.tag.sys.id', '4HFWnzy4RKURB0liNY3NVR')
            ->orderBy('fields.featured', true)
            ->orderBy('fields.startDate');

        return collect($this->client->getEntries($query)->getItems())
            ->map(function ($item) {
                return (new Event($item))->toArray();
            });
    }

    public function getServiceOpportunities()
    {
        $query = (new Query)->setContentType('serviceOpportunity');

        return collect($this->client->getEntries($query)->getItems())
            ->map(function ($item) {
                return (new ServiceOpportunity($item))->toArray();
            });
    }

    public function getStaff()
    {
        $query = (new Query)->setContentType('staff');

        return collect($this->client->getEntries($query)->getItems())
            ->map(function ($item) {
                return (new Staff($item))->toArray();
            });
    }
}
