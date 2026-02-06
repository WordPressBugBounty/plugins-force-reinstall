<?php

namespace RichardMuvirimi\ForceReinstall\Vendor\GuzzleHttp;

use RichardMuvirimi\ForceReinstall\Vendor\Psr\Http\Message\RequestInterface;
use RichardMuvirimi\ForceReinstall\Vendor\Psr\Http\Message\ResponseInterface;

interface MessageFormatterInterface
{
    /**
     * Returns a formatted message string.
     *
     * @param RequestInterface       $request  Request that was sent
     * @param ResponseInterface|null $response Response that was received
     * @param \Throwable|null        $error    Exception that was received
     */
    public function format(RequestInterface $request, ?ResponseInterface $response = null, ?\Throwable $error = null): string;
}
