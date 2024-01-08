<?php

namespace App\Services;

use App\Repositories\WalletRepository;

class WalletService
{
    public function __construct(
        protected WalletRepository $walletRepository
    ) {
    }

    public function getAll($filter = '')
    {
        return $this->walletRepository->getAll($filter);
    }
}
