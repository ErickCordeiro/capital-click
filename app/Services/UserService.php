<?php

namespace App\Services;

use App\Models\User;
use App\Repositories\UserRepository;

class UserService
{
    public function __construct(
        protected UserRepository $repository
    ) {
    }

    public function getPaginate(int $totalPerPage = 15, int $page = 1, string $filter = '')
    {
        return $this->repository->getPaginate(
            totalPerPage: $totalPerPage,
            page: $page,
            filter: $filter
        );
    }

    public function getByEmail(string $email): ?User
    {
        $user = $this->repository->getByEmail($email);

        if (!$user) {
            return null;
        }

        return $user;
    }
}
