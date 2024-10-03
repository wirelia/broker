<?php

namespace ContractChecker\Dsl;

class HttpUrl
{
    public array $httpMethods;

    public function addMethod(HttpMethod $httpMethod): void
    {
        $this->httpMethods[] = $httpMethod;
    }
}
