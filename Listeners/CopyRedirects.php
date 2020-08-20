<?php

namespace App\Listeners;

use Illuminate\Support\Str;
use TightenCo\Jigsaw\Jigsaw;

class CopyRedirects
{
    public function handle(Jigsaw $jigsaw)
    {
        file_put_contents(
            $jigsaw->getDestinationPath() . '/redirects',
            file_get_contents('_redirects')
        );
    }
}
