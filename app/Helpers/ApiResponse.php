<?php
namespace App\Helpers;

use Symfony\Component\HttpFoundation\Response as FoundationResponse;

trait ApiResponse
{
    protected $statusCode = FoundationResponse::HTTP_OK;

    public function getStatusCode()
    {
        return $this->statusCode;
    }

    public function setStatusCode($statusCode)
    {
        $this->statusCode = $statusCode;
        return $this;
    }

}
