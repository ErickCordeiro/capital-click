<?php

namespace App\Repositories;

use App\Models\User;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Pagination\LengthAwarePaginator;

class UserRepository
{
    protected $entity;

    public function __construct()
    {
        $this->entity = (new User());
    }

    public function getPaginate(int $totalPerPage = 15, int $page = 1, $filter = ''): LengthAwarePaginator
    {
        return $this->entity->where(function ($query) use ($filter) {
            if ($filter !== '') {
                $query->where('name', "LIKE", "%{$filter}%");
            }
        })->paginate($totalPerPage, ['*'], 'page'. $page);
    }

    public function getById(int $id): ?User
    {
        return $this->entity->where('id', $id)->first();
    }

    public function getByEmail(string $email): ?User
    {
        return $this->entity->where('email', $email)->first();
    }
}
