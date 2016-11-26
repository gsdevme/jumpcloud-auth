<?php declare(strict_types=1);

namespace JumpCloud\Response\Factory;

use Psr\Http\Message\ResponseInterface as HttpResponseInterface;
use JumpCloud\Response\ResponseInterface;

interface ResponseFactoryInterface
{
    /**
     * @param HttpResponseInterface $response
     *
     * @return ResponseInterface
     */
    public function create(HttpResponseInterface $response): ResponseInterface;
}
