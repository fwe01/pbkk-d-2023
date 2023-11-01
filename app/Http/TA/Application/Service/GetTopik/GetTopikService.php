<?php

namespace App\Http\TA\Application\Service\GetTopik;

use App\Http\TA\Domain\Models\Topik;
use App\Http\TA\Domain\Service\Repository\TopikRepositoryInterface;

class GetTopikService
{

    public function __construct(
        private  TopikRepositoryInterface $topik_repository,
    )
    {
    }

    public function execute(GetTopikRequest $request){
        $topik = $this->topik_repository->getById($request->getId());

        if (!$topik){
            return 'Topik nggak ada';
        }

        return new GetTopikResponse(
            $topik->getJudul(),
            $topik->getNamaDosen(),
            $topik->getStatus(),
        );
    }

}
