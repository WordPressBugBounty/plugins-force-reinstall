<?php

namespace Rich4rdMuvirimi\ForceReinstall\Vendor\Psr\Http\Client;

use Rich4rdMuvirimi\ForceReinstall\Vendor\Psr\Http\Message\RequestInterface;
use Rich4rdMuvirimi\ForceReinstall\Vendor\Psr\Http\Message\ResponseInterface;

interface ClientInterface
{
    /**
     * Sends a PSR-7 request and returns a PSR-7 response.
     *
     * @param RequestInterface $request
     *
     * @return ResponseInterface
     *
     * @throws \Rich4rdMuvirimi\ForceReinstall\Vendor\Psr\Http\Client\ClientExceptionInterface If an error happens while processing the request.
     */
    public function sendRequest(RequestInterface $request): ResponseInterface;
}
