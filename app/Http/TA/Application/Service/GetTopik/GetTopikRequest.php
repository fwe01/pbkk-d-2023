<?php

namespace App\Http\TA\Application\Service\GetTopik;

class GetTopikRequest
{

    public function __construct(
        private int $id
    )
    {
    }

    public function getId(): int
    {
        return $this->id;
    }
}
