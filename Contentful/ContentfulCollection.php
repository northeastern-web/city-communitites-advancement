<?php

namespace App\Contentful;

use App\Contentful\Event;
use Contentful\Delivery\Query;
use Contentful\Delivery\Client;

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
            ->orderBy('fields.date', $descending = true);

        return collect($this->client->getEntries($query)->getItems())
            ->map(function ($item) {
                return (new Event($item))->toArray();
            });
    }
}
