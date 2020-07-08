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
            ->where('fields.tag.sys.contentType.sys.id', 'tag')
            ->where('fields.tag.sys.id', '4HFWnzy4RKURB0liNY3NVR')
            ->orderBy('fields.date', $descending = true);

        return collect($this->client->getEntries($query)->getItems())
            ->map(function ($item) {
                return (new Event($item))->toArray();
            });
    }
}
