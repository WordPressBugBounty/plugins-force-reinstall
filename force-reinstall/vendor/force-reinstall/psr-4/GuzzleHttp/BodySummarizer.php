<?php

namespace Rich4rdMuvirimi\ForceReinstall\Vendor\GuzzleHttp;

use Rich4rdMuvirimi\ForceReinstall\Vendor\Psr\Http\Message\MessageInterface;

final class BodySummarizer implements BodySummarizerInterface
{
    /**
     * @var int|null
     */
    private $truncateAt;

    public function __construct(int $truncateAt = null)
    {
        $this->truncateAt = $truncateAt;
    }

    /**
     * Returns a summarized message body.
     */
    public function summarize(MessageInterface $message): ?string
    {
        return $this->truncateAt === null
            ? \Rich4rdMuvirimi\ForceReinstall\Vendor\GuzzleHttp\Psr7\Message::bodySummary($message)
            : \Rich4rdMuvirimi\ForceReinstall\Vendor\GuzzleHttp\Psr7\Message::bodySummary($message, $this->truncateAt);
    }
}
