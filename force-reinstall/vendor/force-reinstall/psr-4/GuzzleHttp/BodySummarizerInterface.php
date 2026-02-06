<?php

namespace RichardMuvirimi\ForceReinstall\Vendor\GuzzleHttp;

use RichardMuvirimi\ForceReinstall\Vendor\Psr\Http\Message\MessageInterface;

interface BodySummarizerInterface
{
    /**
     * Returns a summarized message body.
     */
    public function summarize(MessageInterface $message): ?string;
}
