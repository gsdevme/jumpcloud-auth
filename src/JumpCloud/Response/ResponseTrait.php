<?php declare(strict_types=1);

namespace JumpCloud\Response;

use GuzzleHttp\Psr7\Response as HttpResponse;
use Psr\Http\Message\StreamInterface;

trait ResponseTrait
{
    /**
     * @var HttpResponse
     */
    protected $response;

    /**
     * @return StreamInterface
     */
    public function getBody(): StreamInterface
    {
        return $this->response->getBody();
    }

    /**
     * @return int
     */
    public function getStatusCode(): int
    {
        return $this->response->getStatusCode();
    }
}
