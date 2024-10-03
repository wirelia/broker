<?php

namespace ContractChecker\Dsl;

class RestConsumer
{
    public array $httpUrls;

    public function addHttpUrl(string $provider, HttpUrl $httpUrl): void
    {
        $this->httpUrls[$provider] = $httpUrl;
    }
}
