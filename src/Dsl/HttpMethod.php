<?php

namespace ContractChecker\Dsl;

use InvalidArgumentException;

class HttpMethod
{
    public array $httpStatusCodes = [];

    public HttpRequestBody $requestBody;

    public array $requestBodyAllowedMethods = ['POST', 'PUT', 'PATCH'];

    public array $allowedMethods = ['GET', 'POST', 'PUT', 'PATCH', 'DELETE'];

    public function __construct(
        public readonly string $methodName
    ) {
        if (!in_array($this->methodName, $this->allowedMethods)) {
            throw new InvalidArgumentException('Invalid HTTP method');
        }
    }

    public function addRequestBody(HttpRequestBody $requestBody): void
    {
        if (!in_array($this->methodName, $this->requestBodyAllowedMethods)) {
            throw new InvalidArgumentException('Request body is not allowed for this method');
        }

        $this->requestBody = $requestBody;
    }

    public function addStatusCode(HttpStatusCode $httpStatusCode): void
    {
        $this->httpStatusCodes[] = $httpStatusCode;
    }
}
