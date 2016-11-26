<?php declare(strict_types=1);

namespace JumpCloud\Response\Factory;

use Psr\Http\Message\ResponseInterface as HttpResponseInterface;
use JumpCloud\Response\ResponseInterface;
use JumpCloud\Response\AuthorizationResponse;

/**
 * Class AuthorizationResponseFactory
 * @package JumpCloud\Factory
 */
class AuthorizationResponseFactory implements ResponseFactoryInterface
{
    /**
     * @param HttpResponseInterface $response
     *
     * @return ResponseInterface
     */
    public function create(HttpResponseInterface $response): ResponseInterface
    {
        if ($response->getStatusCode() === 200) {
            return new AuthorizationResponse($response, AuthorizationResponse::AUTHORISED);
        }

        return new AuthorizationResponse($response, AuthorizationResponse::UNAUTHORISED);
    }
}
