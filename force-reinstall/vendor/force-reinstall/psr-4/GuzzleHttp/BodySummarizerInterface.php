<?php

namespace Rich4rdMuvirimi\ForceReinstall\Vendor\GuzzleHttp;

use Rich4rdMuvirimi\ForceReinstall\Vendor\Psr\Http\Message\MessageInterface;

interface BodySummarizerInterface
{
    /**
     * Returns a summarized message body.
     */
    public function summarize(MessageInterface $message): ?string;
}
