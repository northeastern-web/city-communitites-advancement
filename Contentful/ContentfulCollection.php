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
            ->orderBy('fields.signature', true)
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

    public function getNews()
    {
        $query = (new Query)->setContentType('news')
            ->orderBy('-sys.createdAt');

        return collect($this->client->getEntries($query)->getItems())
            ->map(function ($item) {
                return (new News($item))->toArray();
            });
    }
}
