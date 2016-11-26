<?php declare(strict_types=1);

namespace JumpCloud\Response;

interface ResponseInterface
{
    public function getBody();

    /**
     * @return int
     */
    public function getStatusCode(): int;

}
