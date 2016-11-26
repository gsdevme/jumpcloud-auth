<?php declare(strict_types=1);

namespace JumpCloud\Response;

class ExceptionResponse implements ResponseInterface
{
    private $code;
    private $body;

    /**
     * @param $message
     * @param $code
     */
    public function __construct($message, $code)
    {
        $this->body = ['message' => $message];
        $this->code = $code;
    }

    public function getBody()
    {
        return $this->body;
    }

    /**
     * {@inheritdoc}
     */
    public function getStatusCode(): int
    {
        return $this->code;
    }
}
